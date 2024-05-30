<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate of Completion</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
      body {
            font-family: 'Sofia', sans-serif;
            background-color: #f3f3f3;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .certificate-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 800px;
            text-align: center;
        }

        .certificate {
            border: 10px solid #000;
            padding: 50px;
            border-radius: 10px;
            position: relative;
        }

        .certificate h1 {
            font-size: 2.5em;
            margin-bottom: 0.5em;
        }

        .certificate h2 {
            font-size: 2em;
            margin: 0.5em 0;
            color: #2e6da4;
        }

        .certificate h3 {
            font-size: 1.5em;
            margin: 0.5em 0;
        }

        .certificate p {
            font-size: 1.2em;
            margin: 0.3em 0;
        }

        .signature-container {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
        }

        .signature {
            text-align: center;
            width: 40%;
        }

        .signature p {
            margin: 0.3em 0;
        }   
</style>
<body>
    <div class="certificate-container">
        <div class="certificate">
            <h1>Certificate of Completion</h1>
            <p>This is to certify that</p>
            <h2>{{$CmeRegistration->name}}</h2>
            <p>has successfully completed the</p>
            <h3>{{$program->title}}</h3>
            <p>on this day,</p>
            {{-- <p>[Date]</p> --}}
            <div class="signature-container">
                <div class="signature">
                    <p>_________________________</p>
                    <p>[Instructor's Name]</p>
                    <p>Instructor</p>
                </div>
                <div class="signature">
                    <p>_________________________</p>
                    <p>[Director's Name]</p>
                    <p>Program Director</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
