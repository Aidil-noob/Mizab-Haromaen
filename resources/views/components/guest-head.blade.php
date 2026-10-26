<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mizab Haromaen</title>
    <link rel="preconnect" href="https://www.chatbase.co" crossorigin/>
    <link rel="dns-prefetch" href="https://www.chatbase.co"/>

    <script>
        (function () {
            if (!window.chatbase || window.chatbase("getState") !== "initialized") {
                window.chatbase = (...arguments) => {
                    if (!window.chatbase.q) {
                        window.chatbase.q = []
                    }
                    window.chatbase.q.push(arguments)
                };
                window.chatbase = new Proxy(window.chatbase, {
                    get(target,prop) {
                        if (prop === "q") {
                            return target.q
                        }
                        return (...args) => target(prop,...args)
                    }
                })
            }
            const onLoad = function () {
                const script = document.createElement("script");
                script.src = "https://www.chatbase.co/embed.min.js";
                script.id = "0hw2RyNGg918tAytZACN3";
                script.domain = "www.chatbase.co";
                document.body.appendChild(script)
            };
            if (document.readyState === "complete") {
                onLoad()
            } else {
                window.addEventListener("load",onLoad)
            }
        }) ();
    </script>
    {{-- impor file css & js --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- impor font dari google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
        rel="stylesheet"
    />

    {{-- script untuk menampilkan postingan instagram --}}
    <script async src="https://www.instagram.com/embed.js"></script>

    {{-- ikon website --}}
    <link rel="icon" href="{{ asset('storage/ikon/IMG_7539.webp') }}" type="image/x-icon"/>
</head>
