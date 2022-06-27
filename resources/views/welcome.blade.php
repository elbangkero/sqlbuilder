<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Convert Your Legacy SQL to Laravel Query Builder</title>

    <link rel="preconnect" href="https://www.google-analytics.com">
    <link rel="preload" as="font" crossorigin="anonymous" type="font/woff" href="https://cdn.base64encode.org/assets/fonts/fa-solid-900.woff?v=3">
    <link rel="dns-prefetch" href="https://quantcast.mgr.consensu.org">
    <link rel="dns-prefetch" href="https://pagead2.googlesyndication.com">
    <link rel="dns-prefetch" href="https://tpc.googlesyndication.com"> 

    <script src="https://securepubads.g.doubleclick.net/gpt/pubads_impl_2022061301.js" async=""></script><img src="https://p2.gcprivacy.com/s.gif?pid=Q6CV1VBC&amp;uid=584b7a1b-8c9e-440e-a0d7-8c2d7aaa0c6b&amp;s=home&amp;u=https%3A%2F%2Fwww.base64encode.org%2F&amp;h=www.base64encode.org&amp;ref=https%3A%2F%2Fwww.base64encode.org%2F">
    <script esp-signal="true" src="https://oa.openxcdn.net/esp.js"></script><img src="https://p2.gcprivacy.com/s.gif?pid=Q6CV1VBC&amp;uid=584b7a1b-8c9e-440e-a0d7-8c2d7aaa0c6b&amp;s=home&amp;u=https%3A%2F%2Fwww.base64encode.org%2F&amp;h=www.base64encode.org&amp;ref=https%3A%2F%2Fwww.base64encode.org%2F">
</head>
<style>
    @font-face { font-family: 'Font Awesome 5 Free'; font-style: normal; font-weight: 900; font-display: swap; src: url('https://cdn.base64encode.org/assets/fonts/fa-solid-900.woff?v=3') format('woff') } .fa, .fas { -moz-osx-font-smoothing: grayscale; -webkit-font-smoothing: antialiased; font-style: normal; font-variant: normal; text-rendering: auto } .fa-spin { -webkit-animation: fa-spin 2s infinite linear; -moz-animation: fa-spin 2s infinite linear; -ms-animation: fa-spin 2s infinite linear; -o-animation: fa-spin 2s infinite linear; animation: fa-spin 2s infinite linear } @-webkit-keyframes fa-spin { 0% { -webkit-transform: rotate(0deg); -moz-transform: rotate(0deg); -ms-transform: rotate(0deg); -o-transform: rotate(0deg); transform: rotate(0deg) } 100% { -webkit-transform: rotate(360deg); -moz-transform: rotate(360deg); -ms-transform: rotate(360deg); -o-transform: rotate(360deg); transform: rotate(360deg) } } @keyframes fa-spin { 0% { -webkit-transform: rotate(0deg); -moz-transform: rotate(0deg); -ms-transform: rotate(0deg); -o-transform: rotate(0deg); transform: rotate(0deg) } 100% { -webkit-transform: rotate(360deg); -moz-transform: rotate(360deg); -ms-transform: rotate(360deg); -o-transform: rotate(360deg); transform: rotate(360deg) } } .fa-arrow-left:before { content: "\f060" } .fa-arrow-right:before { content: "\f061" } .fa-chart-line:before { content: "\f201" } .fa-check-circle:before { content: "\f058" } .fa-chevron-left:before { content: "\f053" } .fa-chevron-right:before { content: "\f054" } .fa-cog:before { content: "\f013" } .fa-copyright:before { content: "\f1f9" } .fa-envelope:before { content: "\f0e0" } .fa-envelope-open:before { content: "\f2b6" } .fa-exchange-alt:before { content: "\f362" } .fa-exclamation-triangle:before { content: "\f071" } .fa-file:before { content: "\f15b" } .fa-file-alt:before { content: "\f15c" } .fa-file-archive:before { content: "\f1c6" } .fa-file-code:before { content: "\f1c9" } .fa-folder:before { content: "\f07b" } .fa-folder-open:before { content: "\f07c" } .fa-hand-paper:before { content: "\f256" } .fa-hand-rock:before { content: "\f255" } .fa-info-circle:before { content: "\f05a" } .fa-laptop:before { content: "\f109" } .fa-lock:before { content: "\f023" } .fa-meh:before { content: "\f11a" } .fa-pen-nib:before { content: "\f5ad" } .fa-at:before { content: "\f1fa" } .fa-question-circle:before { content: "\f059" } .fa-random:before { content: "\f074" } .fa-shield-alt:before { content: "\f3ed" } .fa-smile:before { content: "\f118" } .fa-spinner:before { content: "\f110" } .fa-star:before { content: "\f005" } .fa-tablet-alt:before { content: "\f3fa" } .fa-toggle-off:before { content: "\f204" } .fa-toggle-on:before { content: "\f205" } .fa-tv:before { content: "\f26c" } .fa-film:before { content: "\f008" } .fa, .fas { font-family: 'Font Awesome 5 Free'; font-weight: 900 } html, body, main, header, section, aside, article, footer, nav, div, span, ins, label, a, i, u, b, strong, h1, h2, h3, input, button, select, textarea, ul, li, table, tr, th, td { color: inherit; border: none; margin: 0; padding: 0; font-size: 100%; max-height: 999999px; font-style: inherit; font-family: inherit; font-weight: inherit; line-height: inherit; vertical-align: baseline; text-decoration: none } i { font-style: italic } i[class] { float: left; width: 18px; margin: 0 8px 0 0; display: block; text-align: center; font-style: normal } u { text-decoration: underline } b { font-weight: 700 } strong { font-weight: bolder } body { -webkit-text-size-adjust: none; -moz-text-size-adjust: none; -ms-text-size-adjust: none; text-size-adjust: none } a, input, button, select, textarea { resize: none; border-radius: 0; -webkit-tap-highlight-color: transparent } .scrollx { overflow-x: auto } textarea::-webkit-scrollbar, .scrollx::-webkit-scrollbar { width: 8px; height: 8px } textarea::-webkit-scrollbar-thumb, .scrollx::-webkit-scrollbar-thumb { border-radius: 4px; background-color: rgba(0, 0, 0, .5) } ::-webkit-input-placeholder { color: gray; opacity: 1 } :-moz-placeholder { color: gray; opacity: 1 } ::-moz-placeholder { color: gray; opacity: 1 } :-ms-input-placeholder { color: gray; opacity: 1 } ::-ms-input-placeholder { color: gray; opacity: 1 } ::placeholder { color: gray; opacity: 1 } .clear { clear: both; display: block } body { color: #fff; font-size: 13px; font-style: normal; text-align: left; font-family: 'Helvetica Neue', Arial, sans-serif; font-weight: 400; line-height: 18px } .wrapper { margin: 0 auto; display: block; max-width: 1440px } .ad_left { top: 12px; float: left; width: 160px; height: 600px; margin: 221px 0 12px 12px; display: block; overflow: hidden; position: -webkit-sticky; position: sticky; text-align: center } main { padding: 50px; display: block; box-sizing: border-box; background-size: 960px 540px; background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 960 540"%3E%3Cdefs%3E%3Cstyle%3E.clr%7Bfill:%23ffffff;fill-opacity:0.15;%7D%3C/style%3E%3C/defs%3E%3Ctitle%3Eswirl%3C/title%3E%3Cpath class="clr" d="M28.44,0H75.09C56.46,29.15,42,62.05,39.48,96.91c-1.23,19.11,1.57,39.23,12,55.63,7.76,12.32,20.78,21.68,35.43,23.31,15,1.86,29.9-4.19,41.45-13.45,17-13.7,28-33.44,35.3-53.72C174.38,78.47,177.82,46,175.61,14.12a43.5,43.5,0,0,1,10.06.67,216.42,216.42,0,0,1-.11,80.86c-5.25,26.62-15.75,53.22-35,72.87-12.57,13-29.5,22.17-47.65,23.8-18.31,1.91-37-4.51-51.05-16.17-20-16.31-31.22-41.09-35.64-66.07C9.76,73.14,16.24,35.08,28.44,0Z"/%3E%3Cpath class="clr" d="M111.82,0h31.61C117,16.88,92.79,38.12,75.52,64.49c-8.81,13.74-16.09,29-17.78,45.45a22,22,0,0,0,10.37-4.77C75,99.24,80,91.44,84.49,83.57c7.07-12.87,12.12-26.75,16.29-40.79.88-3.44,4.47-4.93,6.94-7.07C128,20.14,151.25,8.83,175.19,0H687c-20.55,5.26-41.3,9.67-62,14.13-45.6,9.52-91.61,17.77-138.13,21.06a443.38,443.38,0,0,1-105-4.33C339.69,24.27,298.7,11,256.11,6.6,222,2.92,186.92,5.1,154.23,15.85a98.1,98.1,0,0,0,10.12-1.09c-.93,27.78-5.34,55.62-14.8,81.83-5.62,15.19-13,29.94-23.55,42.34-8.22,9.58-18.69,17.91-31.17,20.91-9.51,2.33-20.21.62-27.82-5.78-10.12-8.15-14.38-21.45-15.11-34C50.81,99.3,57.38,79,66.57,60.61,78,38,94,17.89,111.82,0Zm17,25.83c-4,19.64-9.4,39.08-17.49,57.46-5.76,12.75-12.74,25.27-22.8,35.16-6,5.42-13.63,10.81-22.15,9.22-4.14-.55-6.31-4.47-8.8-7.33C58.16,128.89,62,138,70,142c7.81,4.09,17.1,1.4,24.24-2.84,12.53-7.64,21.29-20,28.3-32.58,10.91-20.07,17.26-42.27,21.79-64.56,1.43-8,3-16.07,3.68-24.21A198.76,198.76,0,0,0,128.78,25.83Z"/%3E%3Cpath class="clr" d="M191.4,15.37A27.75,27.75,0,0,1,196.94,17c1.71,2.1,2.7,4.66,3.85,7.09,13.58,29.07,17.28,62.21,13,93.84-4.07,29.5-16.58,58.68-38.87,79-20.49,19-48.18,29.17-75.91,30.19-34.86,1.48-69.42-9.58-99-27.61V153.28c14.16,20.05,33.22,37,55.84,46.88,20.27,8.88,43.54,11.5,65,5.72,18.12-4.66,34.46-15.29,46.75-29.31,11.33-12.72,19.32-28.12,24.78-44.18A184.82,184.82,0,0,0,191.4,15.37Z"/%3E%3Cpath class="clr" d="M199.47,17.83C212,22.1,223.63,28.89,234.29,36.71c26.67,20,45.78,49,56.48,80.43,9.21,27.39,12.3,57.45,5,85.67C288.94,229.93,273,253.83,254,274c-23,24.42-50.09,44.57-78,63.05C120,373.76,60.07,404,0,433.48V332.58c39.66-7.32,79.15-16.19,117.35-29.29,30.63-10.61,60.71-23.78,87.26-42.6,22.14-15.7,41.66-36.09,52.85-61.09,12.39-27.23,13.79-58.53,7.19-87.46-6.81-30.61-22.5-59.77-46.53-80.25a46,46,0,0,0-8.47-6.21c2.68,3.82,5.91,7.19,8.7,10.93,20.1,26.54,29.55,60.3,29.06,93.38-.17,28.91-9.83,57.85-28,80.43-19.83,25-48.46,41.49-78.27,51.76C95.9,277.62,47.48,281,0,279.52V238.44c35.48,9.43,72.87,13.51,109.34,8,31.29-4.7,62.28-17.53,84.46-40.63,19.92-20.45,31.41-48.09,34.67-76.24,4-34.08-2.67-69.86-20.84-99.18C205,26.13,201.75,22.3,199.47,17.83Z"/%3E%3C/svg%3E'); background-repeat: no-repeat; } header { margin: 0 0 12px; display: block; text-shadow: 1px 1px 0 rgba(0, 0, 0, .1) } header .logo { float: left; width: 180px; margin: 0 12px 16px 0; display: block; overflow: hidden; transition: color .1s ease } header .logo:focus { color: #f0f0f0; outline: none } header .logo span { width: 180px; display: block; font-size: 28px; text-align: center; font-weight: 900; line-height: 40px } header .logo span:last-of-type { font-size: 18px; font-weight: 700; line-height: 24px } header nav { margin: 0 0 16px; display: block } header nav a, aside nav a { padding: 0 12px; display: block; overflow: hidden; font-size: 16px; background: rgba(255, 255, 255, .25); transition: background .1s ease; font-weight: 700; line-height: 26px } header nav a:first-of-type { margin: 0 0 12px } header nav a:focus, aside nav a:focus { outline: none; background: rgba(255, 255, 255, .2) } header nav .active { color: #606060; background: linear-gradient(135deg, #fff 0%, silver 100%) } header nav .active:focus { background: linear-gradient(135deg, #fff 0%, #b0b0b0 100%) } aside nav a i[class] { float: right; margin: 0 0 0 8px } aside nav a { margin: 0 0 8px; font-size: 14px } aside nav a:last-of-type { margin: 0 } header .intro { font-size: 14px; text-align: justify; line-height: 19px } .ad_top { height: 90px; margin: 0 auto 8px auto; display: block; overflow: hidden; text-align: center } section, article { float: left; color: #000; margin: 0 0 8px; padding: 8px; display: block; width: 100%; word-wrap: break-word; text-align: justify; box-sizing: border-box; background: #fff } article { float: none; clear: left; margin: 0 0 16px } section h1, section h2, article h2, aside h3 { display: block; font-size: 15px; font-weight: 700; line-height: 18px; text-shadow: 1px 1px 0 rgba(0, 0, 0, .1) } section h1 { font-size: 18px; line-height: 20px } section h2 { margin: 16px 0 0 } article h2, aside h3 { margin: 0 0 8px; padding: 0 0 8px; border-bottom: 1px dashed #ccc } article h2 i[class], aside h3 i[class] { margin: 0 6px 0 0 } aside .bookmark h3 { color: #ffb; font-weight: 400; border-bottom: none } section label, section .info { color: #606060; margin: 0 0 12px; padding: 4px 0 8px; display: block; font-size: 12px; border-bottom: 1px dashed #ccc } section .info { padding: 0; border-bottom: none } section .info i[class] { margin: 0 4px 0 0 } form, .form { display: block } textarea { width: 100%; border: 1px solid #ccc; resize: vertical; margin: 0 0 8px; padding: 4px; display: block; overflow: auto; word-break: break-all; box-sizing: border-box; min-height: 220px; max-height: 640px; background: #eee; transition: border .1s ease; white-space: break-spaces } textarea[name=output] { margin: 12px 0 0 } textarea:focus { border: 1px solid #999; outline: none } .error { background: #fee } .option { margin: 0 0 8px; display: block; line-height: 22px } .option:last-of-type { margin: 0 } .option:nth-last-of-type(2) { margin: 0 0 12px } .option label { color: #000; margin: 0; padding: 0; display: inline-block; border-bottom: none } .option select { width: 136px; height: 22px; border: 1px solid #ccc; margin: 0 8px 0 0; padding: 0 0 0 4px; display: inline-block; font-size: 12px; box-sizing: border-box; background: #eee; transition: border .1s ease } .option select:focus { border: 1px solid #999; outline: none } .option input[type=checkbox] { opacity: 0; position: absolute } .option input[type=checkbox]+span { position: relative } .option input[type=checkbox]+span:before { width: 15px; height: 15px; cursor: pointer; border: 1px solid #ccc; margin: 0 8px 0 0; content: ""; display: inline-block; box-sizing: border-box; background: #eee; transition: border .1s ease; vertical-align: text-bottom } .option input[type=checkbox]:checked+span:after { top: 2px; left: 3px; width: 7px; height: 4px; cursor: pointer; content: ""; display: inline-block; position: absolute; transform: rotate(-45deg); border-left: 2px solid #000; border-bottom: 2px solid #000 } .option input[type=checkbox][disabled]+span:before { cursor: not-allowed; border: 1px solid #ddd; background: #fee } .option input[type=checkbox][disabled]:checked+span:after { color: #ccc; cursor: not-allowed } .option input[type=checkbox]:focus+span:before { border: 1px solid #999 } .option button { color: #fff; width: 136px; height: 26px; cursor: pointer; margin: 0 8px 0 0; display: inline-block; font-size: 14px; text-align: center; box-sizing: border-box; transition: border .1s ease; font-weight: 700; text-shadow: 1px 1px 0 rgba(0, 0, 0, .1) } .option button:focus { border: 1px solid #111; outline: none } .option button:not(.live) i[class]:first-of-type { margin: 0 0 0 8px } .option button:not(.live) i[class]:last-of-type { float: right; margin: 0 8px 0 0 } .option .live { color: #000; height: 22px; border: 1px solid #ccc; font-size: 12px; text-align: left; background: #eee; font-weight: 400; text-shadow: none; line-height: 20px } .option .live:focus { border: 1px solid #999; outline: none } .option .live.active { color: #fff } .option .live.active:focus { border: 1px solid #111 } .option .live i[class] { margin: 0 8px } .option select[disabled], .option button[disabled] { color: #ccc; cursor: not-allowed; border: 1px solid #ddd; opacity: 1; background: #fee } .file { color: #606060; width: 100%; height: 160px; border: 1px solid #ccc; margin: 0 0 8px; padding: 0 8px; display: block; position: relative; font-size: 16px; text-align: center; box-sizing: border-box; background: #eee; transition: border .1s ease; font-weight: 700; line-height: 158px } .file:focus-within { border: 1px solid #999 } .file.drag { background: #ccc } .file .counter { right: 2px; bottom: 2px; color: #eee; padding: 2px 6px; position: absolute; font-size: 12px; background: #ccc; font-weight: 700; line-height: 14px } .file .counter.active { color: #fff } .file .detail { display: inline-block; overflow: hidden; max-width: 100%; white-space: nowrap; text-overflow: ellipsis } .file input[type=file] { top: 0; left: 0; width: 100%; height: 100%; cursor: pointer; opacity: 0; display: block; position: absolute } .state { margin: 12px 0 0 } .state>div, .state[data-state] { width: 100%; border: 1px solid #ccc; padding: 8px 12px; display: block; box-sizing: border-box; background: #eee; line-height: 21px } .state[data-state] { display: none } .state[submit-error]>div, .state[data-state=error] { background: #fee } .state i[class] { margin: 0 6px 0 0 } .state[submit-error]>div i[class], .state[data-state=error] i[class] { color: #b00 } .state label { margin: 0 0 8px; padding: 2px 0 6px } .state textarea { border: none; padding: 0 4px 0 0 } .state a { font-weight: 700 } .state a:focus { outline: none; text-decoration: underline } aside { float: right; width: 336px; margin: 0 0 16px; display: block; text-shadow: 1px 1px 0 rgba(0, 0, 0, .1) } aside .bookmark, aside nav { padding: 12px 8px 0; display: block } .ad_right { height: 600px; display: block; overflow: hidden; text-align: center; text-shadow: none } .ad_corner { height: 280px; margin: 20px 0 0; display: block; overflow: hidden; text-align: center; text-shadow: none } section ul, article ul { margin: 8px 16px; padding: 8px } article table { margin: 0; border-collapse: collapse } article table th, article table td { border: 1px solid #ccc; padding: 2px 4px; text-align: center } article table th { background: #eee; font-weight: 400 } .switch { clear: both; margin: 0 0 12px; display: block; overflow: hidden; font-size: 14px; text-align: center; background: rgba(255, 255, 255, .25); transition: background .1s ease; font-weight: 700; line-height: 26px; text-shadow: 1px 1px 0 rgba(0, 0, 0, .1) } .switch:focus { outline: none; background: rgba(255, 255, 255, .2) } .switch span { display: inline-block } footer { padding: 8px; display: block; text-align: justify; text-shadow: 1px 1px 0 rgba(0, 0, 0, .1); line-height: 22px } footer>div { display: block } footer i[class] { margin: 0 6px 0 0 } footer a { float: left; margin: 6px 12px 6px 0; padding: 0 12px; display: block; overflow: hidden; font-size: 14px; background: rgba(255, 255, 255, .25); transition: background .1s ease; font-weight: 700; line-height: 26px } footer a:last-of-type { margin: 6px 0 } footer a:focus { outline: none; background: rgba(255, 255, 255, .2) } header nav a, aside nav a, .option button, .option label, .file .detail, .state a, .switch, footer a, .qc-cmp2-persistent-link, #postPromptUI button { -webkit-tap-highlight-color: transparent; -webkit-touch-callout: none; -webkit-user-select: none; -khtml-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none } .qc-cmp2-persistent-link { background-color: #2596be } .qc-cmp2-summary-buttons>button:first-of-type { color: #fff; background: #206dc5 } .qc-cmp2-summary-buttons>button>span { cursor: pointer } @media all and (max-width:1096px) { section { float: none; width: auto } aside { float: none; width: auto } .ad_right { height: 280px } article { clear: none; width: auto } } @media all and (max-width:752px) { .ad_left { display: none } main { float: none; width: auto } textarea { min-height: 160px } } body { background-color:#2596be; background-image: url('https://cdn.base64encode.org/assets/images/pattern.svg'); background-repeat: repeat } .ad_left { background: #439a00 } section a, article a { color: #275900 } .option button, .option .live.active { border: 1px solid #275900; background: #275900 } .file .counter.active { background: #275900 } .qc-cmp-button.qc-cmp-secondary-button:hover { background-color: #368bd6 !important; border-color: transparent !important; } .qc-cmp-button.qc-cmp-secondary-button:hover { color: #ffffff !important; } .qc-cmp-button.qc-cmp-secondary-button { color: #368bd6 !important; } .qc-cmp-button.qc-cmp-secondary-button { background-color: #eee !important; border-color: transparent !important; }
</style>
<body>
    <div class="wrapper">
        <main>
            <header>
                <a href="" class="logo"><span>Convert Your Legacy SQL to Laravel Query Builder</span></a>
            </header>
            <ins class="ad_top adsbypubmax">
                <div data-aaad="true" data-aa-adunit="/22247219933/BE_970v_1" data-status="rendered" id="463551ac-a523-444f-8f9f-99c0ceacffc3" data-aa-device="[&quot;desktop&quot;,&quot;tablet&quot;]" data-aa-sizes="[[970,90],[728,90]]" data-aa-lazy-loaded="false" data-aa-refresh-timed="30" data-google-query-id="CKKr98LMufgCFe7uTAIdl8wCFA">
                    <div id="google_ads_iframe_/22247219933,22547159034/BE_970v_1_0__container__" style="border: 0pt none; width: 970px; height: 0px;"></div>
                </div>
            </ins>
            <section>
                <form action="/convert" method="post"> 
                    @csrf
                    <h1>Convert Sql Query to Laravel Builder</h1>
                    <label for="input">Simply enter your query then push the Convert button.</label>

                    <textarea name="sql" placeholder="Type (or paste) here..." spellcheck="false" rows="20"><?php if (isset($_POST['sql'])) {echo htmlentities($_POST['sql']);}?></textarea>

                    <div>

                        <span class="option"><button name="convert" type="submit" onclick="base64_encode()"><i class="fas fa-chevron-right"></i>CONVERT<i class="fas fa-chevron-left"></i></button> 


                    </div>
                    <br>
                    
                    <textarea placeholder="Result.." spellcheck="false" rows="20">{{ $result ?? '' }}</textarea>
               
                </form>
            </section>
        </main>
    </div>
</body>

</html>