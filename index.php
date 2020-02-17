<!DOCTYPE html>
<html>

<head>
    <title>My website | Faye Sparshott</title>

    <link href="https://fonts.googleapis.com/css?family=Lemonada:400,600&display=swap" rel="stylesheet" />

    <style>
        html,
        body {
            height: 100%;
            padding: 0;
            margin: 0;
        }

        body {
            font-family: "Lemonada", cursive;
            background: pink url("https://media.giphy.com/media/xUOwGfV7UYp0E6cb1m/giphy.gif") repeat 0 0;
        }

        h1,
        h2 {
            color: #c77b88;
        }

        #page {
            min-height: 100%;
            width: 1024px;
            padding: 40px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.75);
        }
    </style>
</head>

<body>
    <div id="page">
        <nav>
            <a href="#introduction">Intro</a>
            <a href="#media">Media</a>
        </nav>

        <h1>Welcome!</h1>
        <p><strong>Hi</strong>, welcome to <em>my website!</em></p>

        <div id="introduction">
            <h2>A Little About Me</h2>
            <p>Things I Like</p>

            <ul>
                <li>PICTURES</li>
                <li>VIDEOS</li>
                <li>JOKES</li>
                <li>STORIES</li>
                <li>GAMES</li>
            </ul>
        </div>

        <div id="media">
            <h2>Media</h2>
            <p>Here are some images and videos that I like.</p>
        </div>
    </div>
</body>

</html>