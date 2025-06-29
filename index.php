
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đang chuẩn bị tải xuống - EduShare</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffffff; 
            min-height: 100vh;
            color: black; 
        }


        /* Container chính */
        .main-content {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 0;
        }

        .container {
            text-align: center;
            padding: 40px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.2);
            max-width: 500px;
            width: 90%;
        }

        .logo {
            font-size: 48px;
            margin-bottom: 20px;
            animation: bounce 2s infinite;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .document-name {
            font-size: 18px;
            margin-bottom: 30px;
            opacity: 0.9;
            font-weight: 500;
        }

        .countdown-container {
            margin: 40px 0;
        }

        .countdown-text {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .countdown-number {
            font-size: 72px;
            font-weight: bold;
            color: #ffd700;
            text-shadow: 0 0 20px rgba(255, 215, 0, 0.5);
            margin: 20px 0;
            animation: pulse 1s infinite;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 4px;
            overflow: hidden;
            margin: 20px 0;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #ffd700, #ffed4e);
            border-radius: 4px;
            width: 0%;
            transition: width 0.1s ease;
        }

        .status-message {
            font-size: 18px;
            margin-top: 20px;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .status-message.show {
            opacity: 1;
        }

        .success-icon {
            font-size: 48px;
            margin-bottom: 20px;
            animation: checkmark 0.5s ease-in-out;
        }

        .back-link {
            margin-top: 30px;
            padding: 12px 24px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            text-decoration: none;
            border-radius: 25px;
            display: inline-block;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .back-link:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        /* Scroll indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            color: black;
            text-align: center;
            animation: fadeInOut 2s infinite;
        }

        .scroll-arrow {
            font-size: 24px;
            margin-top: 10px;
            animation: bounce 2s infinite;
        }

        /* ADS WRAPPER */
        .ads-wrapper {
            background: white;
            min-height: 100vh;
            padding: 60px 20px;
            position: relative;
        }

        .ads-section {
            max-width: 1200px;
            margin: 0 auto;
        }

        .ads-header {
            text-align: center;
            margin-bottom: 50px;
            color: black;
        }

        .ads-header h2 {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 15px;
            background: linear-gradient(45deg, #ffd700, #ffed4e);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .ads-header p {
            font-size: 18px;
            opacity: 0.8;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .ads-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .ad-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 30px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease;
            min-height: 200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .ad-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .ad-card:hover::before {
            left: 100%;
        }

        .ad-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.4);
        }

        .ad-label {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255, 215, 0, 0.2);
            color: #ffd700;
            padding: 5px 12px;
            border-radius: 15px;
            font-size: 12px;
            font-weight: 600;
            border: 1px solid rgba(255, 215, 0, 0.3);
        }

        .ad-placeholder {
            color: rgba(255, 255, 255, 0.6);
            font-size: 16px;
            margin-bottom: 15px;
        }

        .ad-description {
            color: rgba(255, 255, 255, 0.8);
            font-size: 14px;
            line-height: 1.5;
            margin-top: 10px;
        }

        /* Banner ads */
        .banner-ads {
            display: flex;
            flex-direction: column;
            gap: 30px;
            align-items: center;
        }

        .banner-ad {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 728px;
            min-height: 90px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.6);
            font-size: 16px;
            position: relative;
            overflow: hidden;
        }

        .banner-ad.large {
            min-height: 300px;
            max-width: 300px;
        }

        .banner-ad.medium {
            min-height: 250px;
            max-width: 468px;
        }

        .banner-ad.small {
            min-height: 50px;
            max-width: 320px;
        }

        /* Footer trong ads */
        .ads-footer {
            text-align: center;
            margin-top: 60px;
            padding-top: 40px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .ads-footer p {
            color: rgba(255, 255, 255, 0.6);
            font-size: 14px;
            margin-bottom: 20px;
        }

        .back-to-top {
            padding: 12px 24px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            text-decoration: none;
            border-radius: 25px;
            display: inline-block;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-weight: 500;
        }

        .back-to-top:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }

        /* Animations */
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        @keyframes checkmark {
            0% { transform: scale(0); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }

        @keyframes fadeInOut {
            0%, 100% { opacity: 0.5; }
            50% { opacity: 1; }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                padding: 30px 20px;
            }
            
            h1 {
                font-size: 24px;
            }
            
            .countdown-number {
                font-size: 60px;
            }
            
            .document-name {
                font-size: 16px;
            }

            .ads-header h2 {
                font-size: 24px;
            }

            .ads-header p {
                font-size: 16px;
            }

            .ads-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .ad-card {
                padding: 20px;
                min-height: 150px;
            }

            .banner-ad {
                padding: 15px;
                min-height: 60px;
            }

            .banner-ad.large {
                min-height: 200px;
                max-width: 250px;
            }

            .banner-ad.medium {
                min-height: 180px;
                max-width: 100%;
            }
        }
    </style>
</head>

<body>
    <!-- Main content section -->
    <div class="main-content">
        <div class="container">
            <div class="logo">📚</div>
            <h1>EduShare</h1>
            <div class="document-name" id="documentName">Bài giải OOP (Lập trình hướng đối tượng)</div>

            <div class="countdown-container" id="countdownContainer">
                <div class="countdown-text">Đang lấy tài liệu:</div>
                <div class="countdown-number" id="countdown">5</div>
                <div class="progress-bar">
                    <div class="progress-fill" id="progressFill"></div>
                </div>
            </div>

            <div class="status-message" id="statusMessage"></div>

            <a href="index.php" class="back-link">← Quay lại trang chủ</a>
        </div>

    </div>

    <script>
    const docName = "Bài giải OOP (Lập trình hướng đối tượng)";
    const docPath = "https://drive.google.com/file/d/1AXIUpQvMROohAGtU9-vLfleufp1o6rtz/view";

    function initializePage() {
        document.getElementById('documentName').textContent = docName;

        let countdown = 5;
        const countdownElement = document.getElementById('countdown');
        const progressFill = document.getElementById('progressFill');
        const statusMessage = document.getElementById('statusMessage');

        const timer = setInterval(() => {
            countdown--;
            countdownElement.textContent = countdown;
            progressFill.style.width = ((5 - countdown) / 5) * 100 + '%';

            if (countdown <= 0) {
                clearInterval(timer);
                document.getElementById('countdownContainer').style.display = 'none';
                statusMessage.innerHTML = `
                    <div class="success-icon">✅</div>
                    <div>Đã tìm thấy: ${docName}</div>
                    <a href="${docPath}" class="back-link" 
                    style="margin-top:18px; display:inline-block; background-color: red; color: white; border: none;" 
                    target="_blank">
                    Tải xuống
                    </a>
                `;
                statusMessage.classList.add('show');

            }
        }, 1000);
    }

    window.addEventListener('DOMContentLoaded', initializePage);
</script>



</body>
</html>