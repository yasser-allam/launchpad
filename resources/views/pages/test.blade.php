<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Motion example</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
        body {
            --black: #0f1115;
            --white: #f5f5f5;
            --yellow: #fff312;
            --hue-0: var(--yellow);
            --hue-1: #ff0088;
            --hue-2: #dd00ee;
            --hue-3: #9911ff;
            --hue-4: #0d63f8;
            --hue-5: #0cdcf7;
            --hue-6: #4ff0b7;

            background: var(--black);
            color: var(--color);
            padding: 0;
            margin: 0;
            min-height: 100vh;
            min-height: 100svh;
            --accent: var(--yellow);

            --dot-size: 1px;
            --gap-size: 20px;
            --offset: calc(var(--gap-size) / 2);
            background-image: linear-gradient(var(--black) 70%, transparent 130%),
                radial-gradient(var(--accent) var(--dot-size), transparent var(--dot-size)),
                radial-gradient(var(--accent) var(--dot-size), transparent var(--dot-size));
            background-position: 0px 0px, 0px 0px, var(--offset) var(--offset);
            background-size: 100% 100%, var(--gap-size) var(--gap-size),
                var(--gap-size) var(--gap-size);
            background-color: transparent;
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
        }

        a {
            color: var(--accent);
        }

        .segment {
            fill: var(--accent);
        }

        :root {
            color-scheme: dark;
        }

        button {
            background: none;
            color: inherit;
            border: none;
            padding: 0;
            font: inherit;
            cursor: pointer;
            outline: inherit;
        }

        h1 {
            font-size: 14px;
            line-height: 14px;
            padding: 0;
            margin: 0;
        }

        h1 a {
            display: flex;
            align-items: center;
            text-decoration: none;
            gap: 10px;
        }

        pre,
        h2,
        h3,
        h4,
        p {
            color: var(--accent);
            font-weight: normal;
            font-family: "JetBrains Mono", "JetBrains Mono Placeholder", monospace;
            font-size: 14px;
            line-height: 14px;
            padding: 0;
            margin: 0;
        }

        header {
            padding: 20px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            flex: 0;
        }

        #refresh {
            padding: 5px;
        }

        #refresh svg {
            transition: transform 0.4s ease-out;
        }

        #refresh:hover svg {
            transform: rotate(360deg);
            will-change: transform;
        }

        footer {
            background-image: radial-gradient(var(--accent) 10%, transparent 10%),
                radial-gradient(var(--accent) 10%, transparent 10%);
            background-position: 0px 0px, 8px 8px;
            background-size: 16px 16px;
            background-color: transparent;
            width: 100%;
            height: 100px;
        }

        #logo {
            fill: var(--accent);
            width: 41px;
            height: 14px;
        }

        article header,
        article footer {
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        article footer {
            background: var(--black);
        }

        section {
            height: 500vh;
            position: relative;
        }

        ul {
            display: flex;
            position: sticky;
            top: 0;
        }

        li {
            display: flex;
            width: 100vw;
            height: 100vh;
            flex: 0 0 auto;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            overflow: hidden;
        }

        h2 {
            font-size: 56px;
            font-weight: 700;
            letter-spacing: -3px;
            line-height: 1.2;
            text-align: center;
            margin: 0;
        }

        h3 {
            margin: 0;
            color: var(--red);
            font-size: 50px;
            font-weight: 700;
            letter-spacing: -3px;
            line-height: 1.2;
            position: relative;
            bottom: 30px;
            display: inline-block;
        }

        img {
            width: 300px;
            height: 400px;
        }

        .progress {
            position: fixed;
            left: 0;
            right: 0;
            height: 5px;
            background: var(--accent);
            bottom: 50px;
            transform: scaleX(0);
        }
    </style>
</head>

<body>
    <header>
        <h1>
            <a href="https://motion.dev" target="_blank">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    id="logo"
                    viewBox="0 0 1260 454">
                    <path
                        d="M475.753 0L226.8 453.6L0 453.6L194.392 99.4116C224.526 44.5081 299.724 0 362.353 0L475.753 0Z"
                        stroke="none"></path>
                    <path
                        d="M1031.93 113.4C1031.93 50.7709 1082.7 0 1145.33 0C1207.96 0 1258.73 50.7709 1258.73 113.4C1258.73 176.029 1207.96 226.8 1145.33 226.8C1082.7 226.8 1031.93 176.029 1031.93 113.4Z"
                        stroke="none"></path>
                    <path
                        d="M518.278 0L745.078 0L496.125 453.6L269.325 453.6L518.278 0Z"
                        stroke="none"></path>
                    <path
                        d="M786.147 0L1012.95 0L818.555 354.188C788.422 409.092 713.223 453.6 650.594 453.6L537.194 453.6L786.147 0Z"
                        stroke="none"></path>
                </svg>
                <pre>Fade in/out of viewport</pre>
            </a>
        </h1>
        <button id="refresh" tabindex="0" onClick="window.location.reload();">
            <svg
                width="18"
                height="18"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="-1.4 -0.6 18 18">
                <path
                    d="M12.8 5.1541V2.5a.7.7 0 0 1 1.4 0v5a.7.7 0 0 1-.7.7h-5a.7.7 0 0 1 0-1.4h3.573c-.7005-1.8367-2.4886-3.1-4.5308-3.1C4.8665 3.7 2.7 5.85 2.7 8.5s2.1665 4.8 4.8422 4.8c1.3035 0 2.523-.512 3.426-1.4079a.7.7 0 0 1 .986.9938C10.7915 14.0396 9.2186 14.7 7.5422 14.7 4.0957 14.7 1.3 11.9257 1.3 8.5s2.7957-6.2 6.2422-6.2c2.1801 0 4.137 1.1192 5.2578 2.8541z"
                    fill="var(--accent)"
                    fill-rule="nonzero"></path>
            </svg>
        </button>
    </header>
    <main>
        <article>
            <header>
                <h2>Lines of London</h2>
            </header>
            <section>
                <ul>
                    <li>
                        <img src="/1.jpg" />
                        <h3>#001</h3>
                    </li>
                    <li>
                        <img src="/2.jpg" />
                        <h3>#002</h3>
                    </li>
                    <li>
                        <img src="/3.jpg" />
                        <h3>#003</h3>
                    </li>
                    <li>
                        <img src="/4.jpg" />
                        <h3>#004</h3>
                    </li>
                    <li>
                        <img src="/5.jpg" />
                        <h3>#005</h3>
                    </li>
                </ul>
            </section>
            <footer>
                <p>
                    Photos by
                    <a target="_blank" href="https://twitter.com/mattgperry">Matt Perry</a>
                </p>
            </footer>
        </article>
        <div class="progress"></div>
    </main>
    <script>
        document.body.style.setProperty(
            "--accent",
            `var(--hue-${Math.ceil(Math.random() * 7) - 1})`
        );
    </script>
    {{-- <script src="./script.js" type="module"></script> --}}
    <script>
        import {
            animate,
            scroll,
        } from "https://cdn.jsdelivr.net/npm/framer-motion@11.11.11/dom/+esm";

        const items = document.querySelectorAll("li");

        // Animate gallery horizontally during vertical scroll
        scroll(
            animate(
                "ul", {
                    transform: ["none", `translateX(-${items.length - 1}00vw)`],
                }, {
                    ease: "linear"
                }
            ), {
                target: document.querySelector("section")
            }
        );

        // Progress bar representing gallery scroll
        scroll(animate(".progress", {
            scaleX: [0, 1]
        }, {
            ease: "linear"
        }), {
            target: document.querySelector("section"),
        });

        // Image title parallax
        const segmentLength = 1 / items.length;
        items.forEach((item, i) => {
            const header = item.querySelector("h2");

            scroll(animate(header, {
                x: [200, -200]
            }, {
                ease: "linear"
            }), {
                target: document.querySelector("section"),
                offset: [
                    [i * segmentLength, 1],
                    [(i + 1) * segmentLength, 0],
                ],
            });
        });
    </script>
</body>

</html>
