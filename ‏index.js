const axios = require('axios');

module.exports = async (req, res) => {
    // الرابط الأساسي للسيرفر الأصلي
    const targetBase = "http://185.202.236.109/bein1/";
    const { ts } = req.query;

    // الترويسات المطلوبة لتجاوز الحماية (محدثة من صورك)
    const proxyHeaders = {
        "User-Agent": "AppleCoreMedia/1.0.0.22H311 (iPhone; U; CPU OS 18_7_5 like Mac OS X; ar)",
        "X-Playback-Session-Id": "8F1C0D78-5E52-4DC2-AF76-7928BF3A634F",
        "x-sid": "69f13902-92d5-4b84-a08f-3019f6413b9e", // حدثها دائماً إذا توقف البث
        "Accept": "*/*",
        "Connection": "keep-alive"
    };

    // إعدادات الـ CORS للسماح لموقعك بطلب البث
    res.setHeader('Access-Control-Allow-Origin', '*');
    res.setHeader('Access-Control-Allow-Methods', 'GET, OPTIONS');

    // الحالة الأولى: إذا كان الطلب قطعة فيديو (.ts)
    if (ts) {
        try {
            const response = await axios.get(ts, { 
                headers: proxyHeaders, 
                responseType: 'arraybuffer' 
            });
            res.setHeader('Content-Type', 'video/mp2t');
            return res.send(response.data);
        } catch (e) {
            return res.status(500).send("Error fetching video segment");
        }
    }

    // الحالة الثانية: طلب ملف القائمة الأساسي (m3u8)
    try {
        const response = await axios.get(targetBase + "mono.ts.m3u8", { headers: proxyHeaders });
        let content = response.data;
        const host = req.headers.host;
        
        // تعديل الروابط داخل القائمة لكي تمر عبر البروكسي
        const modifiedContent = content.split('\n').map(line => {
            if (line.trim() !== "" && !line.startsWith("#")) {
                return `https://${host}?ts=${encodeURIComponent(targetBase + line.trim())}`;
            }
            return line;
        }).join('\n');

        res.setHeader('Content-Type', 'application/vnd.apple.mpegurl');
        res.send(modifiedContent);
    } catch (error) {
        res.status(500).send("Error fetching playlist");
    }
};
