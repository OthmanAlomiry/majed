const axios = require('axios');

module.exports = async (req, res) => {
    const targetBase = "http://185.202.236.109/bein1/";
    const m3u8Url = targetBase + "mono.ts.m3u8";

    // الترويسات المستخرجة من صورك لتجاوز الحماية
    const proxyHeaders = {
        "User-Agent": "AppleCoreMedia/1.0.0.22H311 (iPhone; U; CPU OS 18_7_5 like Mac OS X; ar)",
        "X-Playback-Session-Id": "8F1C0D78-5E52-4DC2-AF76-7928BF3A634F",
        "x-sid": "69f13902-92d5-4b84-a08f-3019f6413b9e", // محدث من صورتك الأخيرة
        "Accept": "*/*",
        "Connection": "keep-alive"
    };

    try {
        const response = await axios.get(m3u8Url, { headers: proxyHeaders });
        let content = response.data;

        // تعديل الروابط لتمر عبر Vercel
        const host = req.headers.host;
        const protocol = req.headers['x-forwarded-proto'] || 'http';
        
        const lines = content.split('\n').map(line => {
            if (line.trim() !== "" && !line.startsWith("#")) {
                return `${protocol}://${host}/api/proxy?ts=${encodeURIComponent(targetBase + line.trim())}`;
            }
            return line;
        }).join('\n');

        res.setHeader('Content-Type', 'application/vnd.apple.mpegurl');
        res.setHeader('Access-Control-Allow-Origin', '*');
        res.send(lines);
    } catch (error) {
        res.status(500).send("خطأ في جلب الملف الأساسي");
    }
};
