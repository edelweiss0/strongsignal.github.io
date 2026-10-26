<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>XII TKJ A | Class Website</title>
<style>
:root{--bg:#07111f;--bg2:#0b1b30;--card:#10243b;--blue:#38bdf8;--text:#edf6ff;--muted:#9eb2c9;--border:rgba(96,165,250,.2)}
*{margin:0;padding:0;box-sizing:border-box}
html{scroll-behavior:smooth}
body{background:var(--bg);color:var(--text);font-family:"Segoe UI",Arial,sans-serif;line-height:1.7;overflow-x:hidden}
a{color:inherit;text-decoration:none;-webkit-tap-highlight-color:transparent}
::selection{background:var(--blue);color:#06111e}
a:focus-visible,button:focus-visible,input:focus-visible{outline:2px solid var(--blue);outline-offset:3px}

/* BACKGROUND */
#particles{position:fixed;inset:0;width:100%;height:100%;z-index:-2;pointer-events:none}
body::before{content:"";position:fixed;inset:0;z-index:-1;pointer-events:none;background-image:linear-gradient(rgba(56,189,248,.035) 1px,transparent 1px),linear-gradient(90deg,rgba(56,189,248,.035) 1px,transparent 1px);background-size:45px 45px;mask-image:linear-gradient(to bottom,black,transparent 85%)}
.glow{position:fixed;width:280px;height:280px;border-radius:50%;background:rgba(14,165,233,.09);filter:blur(90px);z-index:-1;pointer-events:none;animation:glowMove 12s ease-in-out infinite alternate}
.glow-one{top:10%;left:-120px}
.glow-two{right:-140px;bottom:5%;animation-delay:-5s}
@keyframes glowMove{to{transform:translate(70px,60px)}}

/* NAVBAR */
header{position:fixed;top:0;left:0;width:100%;z-index:1000;background:rgba(7,17,31,.88);backdrop-filter:blur(16px);border-bottom:1px solid var(--border)}
.navbar{max-width:1200px;min-height:76px;margin:auto;padding:12px 24px;display:flex;justify-content:space-between;align-items:center;gap:20px}
.logo{display:flex;align-items:center;gap:12px;font-weight:800;font-size:19px;white-space:nowrap}
.logo-icon{width:43px;height:43px;display:grid;place-items:center;border-radius:12px;color:var(--blue);background:rgba(56,189,248,.1);border:1px solid var(--border);font-size:24px}
.logo span{color:var(--blue)}
nav{display:flex;align-items:center;gap:22px}
nav a{font-size:13px;color:var(--muted);transition:color .25s}
nav a:hover,nav a.active{color:var(--blue)}
.menu-toggle{display:none;border:1px solid var(--border);color:var(--blue);background:var(--card);padding:7px 12px;border-radius:8px;font-size:22px;cursor:pointer}

/* GENERAL */
.container{width:min(1120px,90%);margin:auto}
section{padding:100px 0;scroll-margin-top:70px}
.section-heading{text-align:center;margin-bottom:42px}
.eyebrow{color:var(--blue);font-size:12px;letter-spacing:3px;font-weight:700}
.section-heading h2{font-size:clamp(28px,4vw,40px);line-height:1.3;margin:10px 0}
.section-heading p{color:var(--muted);font-size:14px}
.line{width:65px;height:3px;border-radius:10px;margin:18px auto 0;background:linear-gradient(90deg,var(--blue),#818cf8);box-shadow:0 0 15px rgba(56,189,248,.5)}
.gradient-text{background:linear-gradient(90deg,#38bdf8,#818cf8,#38bdf8);background-size:200% auto;color:transparent;background-clip:text;-webkit-background-clip:text;animation:gradientMove 7s linear infinite}
@keyframes gradientMove{to{background-position:200% center}}
.btn{display:inline-flex;justify-content:center;align-items:center;gap:9px;padding:12px 20px;border-radius:9px;font-weight:700;font-size:14px;transition:transform .25s}
.btn:hover{transform:translateY(-3px)}
.btn-primary{color:#06111e;background:linear-gradient(135deg,#38bdf8,#60a5fa);box-shadow:0 5px 25px rgba(56,189,248,.18)}
.btn-outline{color:var(--blue);border:1px solid rgba(56,189,248,.4);background:rgba(56,189,248,.04)}

/* HOME */
#home{min-height:100vh;display:flex;align-items:center;padding-top:125px;padding-bottom:70px}
.hero-grid{display:grid;grid-template-columns:1fr 1fr;gap:55px;align-items:center}
.status{display:inline-flex;align-items:center;gap:9px;padding:7px 13px;background:rgba(56,189,248,.07);border:1px solid var(--border);border-radius:30px;color:#a5e6ff;font-size:11px;letter-spacing:1px;margin-bottom:23px}
.status-dot{width:7px;height:7px;background:#4ade80;border-radius:50%;box-shadow:0 0 10px #4ade80;animation:blink 2s infinite}
@keyframes blink{50%{opacity:.35}}
.hero h1{font-size:clamp(40px,6vw,68px);line-height:1.12;letter-spacing:-2px;margin-bottom:20px}
.hero-description{color:var(--muted);font-size:15px;max-width:470px;margin-bottom:25px}
.hero-buttons{display:flex;flex-wrap:wrap;gap:12px;margin-bottom:30px}
.terminal{background:rgba(8,24,41,.9);border:1px solid rgba(56,189,248,.22);border-radius:12px;overflow:hidden;max-width:470px;box-shadow:0 15px 50px rgba(0,0,0,.2)}
.terminal-top{display:flex;align-items:center;gap:6px;padding:12px 15px;background:rgba(255,255,255,.025);border-bottom:1px solid var(--border)}
.terminal-top span{width:9px;height:9px;border-radius:50%}
.terminal-top span:nth-child(1){background:#fb7185}
.terminal-top span:nth-child(2){background:#fbbf24}
.terminal-top span:nth-child(3){background:#4ade80}
.terminal-title{margin-left:8px;font-size:11px;color:var(--muted)}
.terminal-body{padding:16px;min-height:118px;font:12px/2 Consolas,monospace;color:#9fb8ce}
.terminal-body p{overflow-wrap:anywhere}
.prompt{color:#4ade80}
.terminal-output{color:var(--blue)}
.cursor{display:inline-block;width:7px;height:14px;vertical-align:middle;background:var(--blue);animation:blink .9s infinite}

/* NETWORK CARD */
.network-visual{position:relative;min-width:0}
.network-card{position:relative;background:linear-gradient(145deg,rgba(16,36,59,.94),rgba(8,22,39,.94));border:1px solid var(--border);border-radius:20px;padding:25px;box-shadow:0 20px 70px rgba(0,0,0,.2)}
.network-card-title{display:flex;align-items:center;justify-content:space-between;gap:10px;margin-bottom:24px}
.network-card-title h3{font-size:15px}
.network-card-title span{color:#4ade80;font-size:10px}
.network-layout{display:grid;grid-template-columns:1fr 1fr;gap:13px}
.device{display:block;border:1px solid rgba(56,189,248,.18);border-radius:12px;background:rgba(56,189,248,.045);text-align:center;padding:18px 8px;transition:.3s}
.device:hover{border-color:var(--blue);background:rgba(56,189,248,.1)}
.device-icon{font-size:29px;display:block;margin-bottom:8px}
.device strong{display:block;font-size:12px}
.device small{display:block;color:var(--muted);font-size:10px;margin-top:4px}
.device small::before{content:"";display:inline-block;width:5px;height:5px;margin-right:5px;border-radius:50%;background:#4ade80}
.network-line{position:relative;height:27px;display:flex;align-items:center;justify-content:center}
.network-line::before{content:"";width:65%;height:1px;background:rgba(56,189,248,.35)}
.network-line::after{content:"";position:absolute;width:18px;height:3px;border-radius:10px;background:var(--blue);box-shadow:0 0 12px var(--blue);animation:dataFlow 2.5s ease-in-out infinite alternate}
@keyframes dataFlow{from{transform:translateX(-45px);opacity:.35}to{transform:translateX(45px);opacity:1}}
.network-footer{display:flex;justify-content:space-between;gap:10px;flex-wrap:wrap;margin-top:23px;padding-top:16px;border-top:1px solid var(--border);color:var(--muted);font-size:10px}
.network-footer strong{color:var(--blue)}

/* BLOG */
.device-link{width:100%;font:inherit;color:inherit;cursor:pointer}
.blog-list{display:grid;gap:10px}
.blog-item{display:flex;align-items:center;justify-content:space-between;gap:12px;flex-wrap:wrap;padding:12px 15px;background:var(--card);border:1px solid var(--border);border-radius:10px}
.blog-item strong{font-size:14px}
.blog-item small{display:block;color:var(--muted);font:12px Consolas,monospace;overflow-wrap:anywhere}
.blog-visit{padding:7px 13px;border:1px solid rgba(56,189,248,.4);border-radius:8px;color:var(--blue);font-size:12px;font-weight:700;transition:background .25s,color .25s}
.blog-visit:hover{background:var(--blue);color:var(--bg)}
.blog-empty{color:var(--muted);font-size:12px}

/* FOTO KELAS */
.photo-frame{max-width:900px;margin:auto;padding:9px;border:1px solid rgba(56,189,248,.3);border-radius:18px;background:linear-gradient(145deg,#122b46,#081321);box-shadow:0 20px 70px rgba(0,0,0,.24)}
.photo-frame img{display:block;width:100%;aspect-ratio:16/9;object-fit:cover;border-radius:11px;background:var(--card)}
.photo-caption{text-align:center;padding:18px 10px 12px}
.photo-caption h3{font-size:20px;margin-bottom:4px}
.photo-caption p{font-size:12px;color:var(--muted)}

/* TENTANG */
#tentang{background:linear-gradient(180deg,transparent,rgba(11,27,48,.6),transparent)}
.about-grid{display:grid;grid-template-columns:1fr 1fr;gap:20px}
.info-card{background:rgba(16,36,59,.72);border:1px solid var(--border);border-radius:15px;padding:25px;transition:border-color .3s,transform .3s}
.info-card:hover{border-color:rgba(56,189,248,.5);transform:translateY(-4px)}
.big-icon{font-size:27px;margin-bottom:10px}
.info-card h3{font-size:18px;margin-bottom:9px}
.info-card p{color:var(--muted);font-size:13px}
.tech-tags{display:flex;flex-wrap:wrap;gap:8px;margin-top:17px}
.tech-tags span{font-size:11px;padding:5px 10px;color:#a5e6ff;background:rgba(56,189,248,.07);border:1px solid var(--border);border-radius:6px}

/* STRUKTUR */
.structure-grid{max-width:800px;margin:auto;display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:15px}
.person-card{display:flex;align-items:center;gap:15px;padding:20px;border-radius:13px;background:rgba(16,36,59,.72);border:1px solid var(--border);transition:.3s}
.person-card:hover{transform:translateY(-4px);border-color:var(--blue);box-shadow:0 8px 25px rgba(56,189,248,.07)}
.person-card.teacher{grid-column:1/-1;flex-direction:column;text-align:center;padding:25px}
.person-card small{color:var(--blue);display:block;font-size:11px}
.person-card h3{font-size:15px;overflow-wrap:anywhere}
.teacher-photo{display:block;width:min(100%,600px);height:360px;object-fit:cover;border-radius:14px;border:2px solid var(--blue);box-shadow:0 0 22px rgba(56,189,248,.2);cursor:zoom-in}
.person-photo{flex-shrink:0;width:90px;height:90px;object-fit:cover;border-radius:50%;border:2px solid var(--blue);box-shadow:0 0 12px rgba(56,189,248,.2)}
.structure-grid .person-card:last-child{grid-column:1/-1;justify-self:center;width:calc(50% - 8px)}

/* ANGGOTA */
.member-tools{display:flex;justify-content:center;margin:-15px auto 28px}
.search-box{width:min(380px,100%);padding:12px 15px;border:1px solid var(--border);border-radius:9px;color:var(--text);background:var(--card);font-size:13px}
.search-box::placeholder{color:#7f95ab}
.member-count{text-align:center;color:var(--muted);font-size:12px;margin:-12px 0 22px}
.member-count strong{color:var(--blue)}
.members-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:22px}
.member-card{min-width:0;overflow:hidden;padding:16px;text-align:center;background:rgba(16,36,59,.82);border:1px solid var(--border);border-radius:15px;transition:transform .3s,border-color .3s,box-shadow .3s}
.member-card:hover{transform:translateY(-5px);border-color:var(--blue);box-shadow:0 10px 28px rgba(56,189,248,.12)}
.member-photo{display:block;width:100%;height:260px;object-fit:cover;border:2px solid rgba(56,189,248,.4);border-radius:11px;margin-bottom:14px;background:var(--bg2)}
.member-number{display:block;color:var(--blue);font:11px Consolas,monospace;margin-bottom:5px}
.member-card h3{font-size:15px;overflow-wrap:anywhere}
.no-results{text-align:center;color:var(--muted);padding:25px;grid-column:1/-1}

/* GALERI */
.gallery-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:16px}
.gallery-placeholder{min-height:165px;display:flex;flex-direction:column;justify-content:center;align-items:center;gap:9px;padding:20px;border-radius:13px;border:1px dashed rgba(96,165,250,.35);background:rgba(16,36,59,.45);text-align:center;transition:.3s}
.gallery-placeholder:hover{border-color:var(--blue);background:rgba(56,189,248,.06)}
.gallery-icon{font-size:32px}
.gallery-placeholder h3{font-size:14px}
.gallery-placeholder p{color:var(--muted);font-size:11px}

/* PRESTASI */
.achievement-box{max-width:750px;margin:auto;text-align:center;padding:35px 25px;border-radius:16px;border:1px solid var(--border);background:linear-gradient(145deg,rgba(16,36,59,.85),rgba(8,22,39,.85))}
.achievement-link{display:block;width:100%;font:inherit;color:inherit;cursor:pointer;position:relative;overflow:hidden;transition:transform .35s ease,border-color .35s ease,box-shadow .35s ease}
.achievement-link::before{content:"";position:absolute;inset:-2px;border-radius:18px;background:linear-gradient(120deg,transparent,rgba(56,189,248,.18),transparent);transform:translateX(-100%);transition:transform .7s ease;pointer-events:none}
.achievement-link:hover{transform:translateY(-7px) scale(1.01);border-color:rgba(56,189,248,.65);box-shadow:0 18px 55px rgba(0,0,0,.3),0 0 35px rgba(56,189,248,.12)}
.achievement-link:hover::before{transform:translateX(100%)}
.achievement-link:active{transform:scale(.98)}
.achievement-link .trophy,.achievement-link h3,.achievement-link p{position:relative;z-index:1}
.achievement-hint{display:inline-flex;align-items:center;gap:7px;margin-top:18px;padding:7px 12px;border-radius:20px;color:var(--blue);font-size:11px;border:1px solid rgba(56,189,248,.25);background:rgba(56,189,248,.06)}
.trophy{font-size:38px;margin-bottom:10px}
.achievement-box h3{font-size:20px;margin-bottom:8px}
.achievement-box p{font-size:13px;color:var(--muted)}

/* KARTU GALERI YANG BISA DIKLIK */
.gallery-link{width:100%;font:inherit;color:inherit;cursor:pointer}
.gallery-link:hover{transform:translateY(-4px);box-shadow:0 10px 28px rgba(56,189,248,.12)}

/* MODAL */
.modal{position:fixed;inset:0;z-index:2000;display:flex;align-items:center;justify-content:center;padding:20px;background:rgba(3,8,16,.88);backdrop-filter:blur(6px)}
.modal[hidden]{display:none}
.modal-box{width:min(1000px,100%);max-height:90vh;overflow-y:auto;padding:22px;background:var(--bg2);border:1px solid var(--border);border-radius:16px}
.modal-head{display:flex;align-items:center;justify-content:space-between;margin-bottom:18px}
.modal-head h3{font-size:20px}
.modal-close{width:38px;height:38px;border:1px solid var(--border);border-radius:10px;background:var(--card);color:var(--blue);font-size:18px;cursor:pointer}
.modal-close:hover{background:var(--blue);color:var(--bg)}

/* GALERI PRAKTIK & KEBERSAMAAN */
.praktik-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:12px}
.praktik-grid img{display:block;width:100%;aspect-ratio:4/3;object-fit:cover;border:1px solid var(--border);border-radius:10px;background:var(--card);cursor:zoom-in;transition:transform .25s,border-color .25s}
.praktik-grid img:hover{transform:scale(1.03);border-color:var(--blue)}

/* GALERI PRESTASI */
.achievement-modal-box{animation:achievementEnter .55s cubic-bezier(.2,.8,.2,1) both}
@keyframes achievementEnter{from{opacity:0;transform:translateY(45px) scale(.88) rotateX(7deg)}to{opacity:1;transform:translateY(0) scale(1) rotateX(0)}}
.achievement-modal-head{display:flex;align-items:center;justify-content:space-between;gap:15px;margin-bottom:22px}
.achievement-modal-title{display:flex;align-items:center;gap:12px}
.achievement-modal-title span{font-size:32px}
.achievement-modal-title h3{font-size:21px}
.achievement-modal-title small{display:block;color:var(--muted);font-size:11px;margin-top:2px}
.achievement-grid{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:15px}
.achievement-photo{display:block;width:100%;aspect-ratio:4/3;object-fit:cover;border-radius:12px;border:1px solid var(--border);background:var(--card);cursor:zoom-in;transition:transform .35s ease,border-color .35s ease,box-shadow .35s ease}
.achievement-photo:hover{transform:translateY(-5px) scale(1.02);border-color:var(--blue);box-shadow:0 12px 30px rgba(0,0,0,.3),0 0 22px rgba(56,189,248,.12)}
.achievement-number{margin-top:6px;color:var(--muted);font-size:10px;text-align:center}

/* LIGHTBOX */
#lightbox{z-index:2100;cursor:zoom-out;background:rgba(3,8,16,.94)}
#lightbox img{display:block;max-width:92vw;max-height:90vh;width:auto;height:auto;object-fit:contain;border-radius:14px;border:2px solid rgba(56,189,248,.5);box-shadow:0 20px 70px rgba(0,0,0,.7),0 0 45px rgba(56,189,248,.15);cursor:default}

/* FOOTER */
footer{border-top:1px solid var(--border);background:rgba(5,13,24,.8);padding:30px 0}
.footer-inner{display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:15px}
.footer-inner p{color:var(--muted);font-size:12px}
.footer-brand{font-weight:800;color:var(--blue);font-size:15px}
.footer-brand span{color:var(--muted)}
.reveal{opacity:0;transform:translateY(22px);transition:opacity .7s ease,transform .7s ease}
.reveal.visible{opacity:1;transform:none}
.delay-1{transition-delay:.08s}
.delay-2{transition-delay:.16s}
.back-top{position:fixed;bottom:22px;right:22px;z-index:100;width:43px;height:43px;border:1px solid var(--border);border-radius:12px;background:rgba(16,36,59,.95);color:var(--blue);font-size:20px;cursor:pointer;opacity:0;visibility:hidden;transform:translateY(10px);transition:.3s}
.back-top.show{opacity:1;visibility:visible;transform:none}
.back-top:hover{background:var(--blue);color:var(--bg)}

/* RESPONSIVE */
@media(max-width:900px){nav{gap:13px}nav a{font-size:12px}.hero-grid{gap:30px}}
@media(max-width:720px){
.navbar{min-height:68px}
.menu-toggle{display:block}
nav{position:absolute;top:68px;left:0;width:100%;padding:15px 5% 20px;background:rgba(7,17,31,.98);border-bottom:1px solid var(--border);display:none;flex-direction:column;align-items:stretch;gap:0}
nav.open{display:flex}
nav a{padding:11px 5px;font-size:14px}
.hero-grid{grid-template-columns:1fr;gap:42px}
.network-visual{max-width:500px;width:100%;margin:auto}
section{padding:75px 0}
#home{padding-top:115px}
.about-grid{grid-template-columns:1fr}
.members-grid{grid-template-columns:repeat(2,minmax(0,1fr));gap:14px}
.member-photo{height:220px}
.teacher-photo{height:300px}
.gallery-grid{grid-template-columns:1fr 1fr}
.praktik-grid{grid-template-columns:repeat(2,minmax(0,1fr))}
.achievement-grid{grid-template-columns:repeat(2,minmax(0,1fr))}
}
@media(max-width:430px){
.container{width:91%}
.logo{font-size:16px}
.structure-grid{grid-template-columns:1fr}
.structure-grid .person-card:last-child{width:100%}
.members-grid{grid-template-columns:1fr}
.member-photo{height:300px}
.teacher-photo{height:280px}
.network-card{padding:17px}
.gallery-grid{grid-template-columns:1fr}
.footer-inner{flex-direction:column;text-align:center}
.photo-frame img{aspect-ratio:4/3}
.achievement-grid{grid-template-columns:1fr}
}
@media(prefers-reduced-motion:reduce){
*,*::before,*::after{animation-duration:.01ms!important;animation-iteration-count:1!important;transition-duration:.01ms!important}
html{scroll-behavior:auto}
.reveal{opacity:1;transform:none}
}

/* ===== ANIMASI TAMBAHAN ===== */
@keyframes floatY{0%,100%{transform:translateY(0)}50%{transform:translateY(-12px)}}
@keyframes bob{0%,100%{transform:translateY(0)}50%{transform:translateY(-5px)}}
@keyframes popIn{from{opacity:0;transform:translateY(30px) scale(.92)}}
@keyframes lineGrow{from{transform:scaleX(0)}}
@keyframes shine{to{left:130%}}
@keyframes logoPulse{0%,100%{box-shadow:0 0 0 0 rgba(56,189,248,.35)}50%{box-shadow:0 0 0 9px rgba(56,189,248,0)}}
@keyframes frameGlow{0%,100%{box-shadow:0 20px 70px rgba(0,0,0,.24),0 0 0 rgba(56,189,248,0)}50%{box-shadow:0 20px 70px rgba(0,0,0,.24),0 0 35px rgba(56,189,248,.25)}}
@keyframes trophyJump{0%,100%{transform:translateY(0) rotate(0)}30%{transform:translateY(-12px) rotate(-8deg)}60%{transform:translateY(0) rotate(6deg)}}
.network-card{animation:floatY 6s ease-in-out infinite}
.device-icon{animation:bob 3s ease-in-out infinite}
.network-layout .device:nth-child(2) .device-icon{animation-delay:-.8s}
.network-layout:last-of-type .device:nth-child(1) .device-icon{animation-delay:-1.6s}
.network-layout:last-of-type .device:nth-child(2) .device-icon{animation-delay:-2.3s}
.logo-icon{animation:logoPulse 2.8s infinite}
.btn{position:relative;overflow:hidden}
.btn-primary::after{content:"";position:absolute;top:0;left:-60%;width:40%;height:100%;background:linear-gradient(100deg,transparent,rgba(255,255,255,.55),transparent);transform:skewX(-20deg);animation:shine 3.5s ease-in-out infinite}
.section-heading.visible .line{animation:lineGrow .8s .3s ease both}
.member-card.visible{animation:popIn .6s calc(var(--i,0)*70ms) ease backwards}
.photo-frame{animation:frameGlow 4s ease-in-out infinite}
.gallery-icon{animation:bob 3s ease-in-out infinite}
.gallery-grid>*:nth-child(2) .gallery-icon{animation-delay:-1s}
.gallery-grid>*:nth-child(3) .gallery-icon{animation-delay:-2s}
.trophy{display:inline-block;animation:trophyJump 3s ease-in-out infinite}
.member-card,.info-card,.person-card,.gallery-placeholder{position:relative}
.member-card::after,.info-card::after,.person-card::after,.gallery-placeholder::after{content:"";position:absolute;inset:0;border-radius:inherit;pointer-events:none;opacity:0;transition:opacity .3s;background:radial-gradient(circle 130px at var(--mx,50%) var(--my,50%),rgba(56,189,248,.16),transparent)}
.member-card:hover::after,.info-card:hover::after,.person-card:hover::after,.gallery-placeholder:hover::after{opacity:1}
.scroll-progress{position:fixed;top:0;left:0;height:3px;width:0;z-index:1100;background:linear-gradient(90deg,#38bdf8,#818cf8);box-shadow:0 0 12px rgba(56,189,248,.7)}
.cursor-glow{position:fixed;top:0;left:0;width:320px;height:320px;margin:-160px 0 0 -160px;border-radius:50%;background:radial-gradient(circle,rgba(56,189,248,.13),transparent 70%);pointer-events:none;z-index:-1;will-change:transform}
@media(hover:none){.cursor-glow{display:none}}
@media(prefers-reduced-motion:reduce){.cursor-glow{display:none}}

/* ===== LATAR LEBIH HIDUP ===== */
@keyframes gridMove{to{background-position:45px 45px,45px 45px}}
@keyframes glowMove2{0%{transform:translate(0,0) scale(1)}50%{transform:translate(120px,-80px) scale(1.25)}100%{transform:translate(-60px,100px) scale(.9)}}
body::before{background-image:linear-gradient(rgba(56,189,248,.08) 1px,transparent 1px),linear-gradient(90deg,rgba(56,189,248,.08) 1px,transparent 1px);animation:gridMove 4s linear infinite}
.glow{width:420px;height:420px;background:rgba(14,165,233,.22);animation:glowMove2 9s ease-in-out infinite alternate}
.glow-two{background:rgba(129,140,248,.2);animation-duration:11s}
.bg-glow-3{position:fixed;top:45%;left:45%;width:340px;height:340px;border-radius:50%;background:rgba(56,189,248,.14);filter:blur(90px);z-index:-1;pointer-events:none;animation:glowMove2 13s ease-in-out infinite alternate-reverse}
@media(prefers-reduced-motion:reduce){
body::before{animation:gridMove 4s linear infinite!important}
.glow{animation:glowMove2 9s ease-in-out infinite alternate!important}
.glow-two{animation-duration:11s!important}
.bg-glow-3{animation:glowMove2 13s ease-in-out infinite alternate-reverse!important}
.status-dot{animation:blink 2s infinite!important}
.network-line::after{animation:dataFlow 2.5s ease-in-out infinite alternate!important}
}

/* ===== LOGO NAVBAR ===== */
.logo-icon{position:relative;overflow:hidden}
.logo-icon img{position:absolute;inset:0;width:100%;height:100%;object-fit:contain;padding:4px;background:var(--bg2);border-radius:inherit}

/* ===== LOGO SEKOLAH & KELAS ===== */
.brand-logos{display:flex;justify-content:center;align-items:center;gap:18px;margin-bottom:18px}
.brand-logos img{height:64px;width:auto;max-width:42%;object-fit:contain;filter:drop-shadow(0 0 12px rgba(56,189,248,.35))}
.brand-logos .divider{width:1px;height:40px;background:var(--border)}

/* ===== UPGRADE PREMIUM ===== */
html{scrollbar-color:#1d4f73 var(--bg);scrollbar-width:thin}
::-webkit-scrollbar{width:9px}
::-webkit-scrollbar-track{background:var(--bg)}
::-webkit-scrollbar-thumb{background:linear-gradient(#38bdf8,#818cf8);border-radius:10px}
header{transition:background .3s,box-shadow .3s}
.navbar{transition:min-height .3s}
header.scrolled{background:rgba(7,17,31,.95);box-shadow:0 10px 40px rgba(0,0,0,.35)}
header.scrolled .navbar{min-height:62px}
nav a{position:relative;padding:6px 0}
nav a::after{content:"";position:absolute;left:0;bottom:0;height:2px;width:100%;background:linear-gradient(90deg,#38bdf8,#818cf8);transform:scaleX(0);transform-origin:left;transition:transform .3s}
nav a:hover::after,nav a.active::after{transform:scaleX(1)}
.hero h1{font-size:clamp(44px,6.4vw,76px);text-shadow:0 0 60px rgba(56,189,248,.25)}
.hero-description{font-size:16px}
.btn{padding:14px 24px;border-radius:12px}
.btn-primary:hover{box-shadow:0 10px 40px rgba(56,189,248,.45)}
.btn-outline:hover{background:rgba(56,189,248,.12);border-color:var(--blue)}
.hero-stats{display:flex;flex-wrap:wrap;gap:12px;margin-bottom:30px}
.hero-stats div{min-width:104px;padding:12px 16px;border-radius:14px;background:rgba(16,36,59,.6);border:1px solid var(--border);backdrop-filter:blur(10px)}
.hero-stats strong{display:block;font-size:26px;line-height:1.2;background:linear-gradient(90deg,#38bdf8,#818cf8);-webkit-background-clip:text;background-clip:text;color:transparent}
.hero-stats span{font-size:11px;letter-spacing:1.5px;color:var(--muted);text-transform:uppercase}
.network-card{backdrop-filter:blur(14px);box-shadow:0 30px 90px rgba(0,0,0,.35),0 0 60px rgba(56,189,248,.08)}
.device small,.network-footer{font-size:11px}
.marquee{overflow:hidden;border-block:1px solid var(--border);background:rgba(11,27,48,.55);padding:16px 0;-webkit-mask-image:linear-gradient(90deg,transparent,#000 12%,#000 88%,transparent);mask-image:linear-gradient(90deg,transparent,#000 12%,#000 88%,transparent)}
.marquee-track{display:flex;width:max-content;animation:marquee 28s linear infinite}
.marquee-track span{padding-right:46px;font:700 13px/1 Consolas,monospace;letter-spacing:4px;color:#6fb9e6;white-space:nowrap}
.marquee-track span::before{content:"◆";margin-right:46px;color:#818cf8}
@keyframes marquee{to{transform:translateX(-50%)}}
.marquee:hover .marquee-track{animation-play-state:paused}
section{padding:110px 0}
.eyebrow{display:inline-flex;align-items:center;gap:12px}
.eyebrow::before,.eyebrow::after{content:"";width:28px;height:1px;background:linear-gradient(90deg,transparent,var(--blue))}
.eyebrow::after{transform:scaleX(-1)}
.section-heading h2{font-size:clamp(30px,4.4vw,46px);letter-spacing:-1px}
.info-card,.person-card,.member-card{backdrop-filter:blur(10px);box-shadow:inset 0 1px 0 rgba(255,255,255,.05),0 10px 30px rgba(0,0,0,.18)}
.info-card p{font-size:14px}
.member-photo{filter:saturate(.85) brightness(.95);transition:filter .4s}
.member-card:hover .member-photo{filter:none}
.member-card h3,.person-card h3{transition:color .3s}
.member-card:hover h3,.person-card:hover h3{color:var(--blue)}
.member-number{display:inline-block;padding:2px 10px;border-radius:20px;background:rgba(56,189,248,.1);border:1px solid var(--border)}
.photo-frame{overflow:hidden}
.photo-frame img{transition:transform 1s ease}
.photo-frame:hover img{transform:scale(1.035)}
.tilt.visible{transform:perspective(900px) rotateX(var(--rx,0deg)) rotateY(var(--ry,0deg));transition:transform .15s ease-out,border-color .3s,box-shadow .3s,background .3s,opacity .7s}
.member-card.tilt.visible:hover,.info-card.tilt.visible:hover,.person-card.tilt.visible:hover{transform:perspective(900px) rotateX(var(--rx,0deg)) rotateY(var(--ry,0deg)) translateY(-6px)}
.footer-links{display:flex;flex-wrap:wrap;gap:6px 18px}
.footer-links a{font-size:12px;color:var(--muted);transition:color .25s}
.footer-links a:hover{color:var(--blue)}
@media(max-width:720px){
section{padding:75px 0}
nav a::after{display:none}
.hero-stats div{flex:1;min-width:90px}
}
@media(prefers-reduced-motion:reduce){
.marquee-track{animation:marquee 28s linear infinite!important}
}
.brand-logos:not(:has(img:not([style*="display: none"]))){display:none}

/* ===== LAYAR SAMBUTAN & TOMBOL MUSIK ===== */
.welcome{position:fixed;inset:0;z-index:3000;display:grid;place-items:center;background:radial-gradient(circle at 50% 40%,#0b1b30,#050d18);transition:opacity .6s,visibility .6s}
.welcome.hide{opacity:0;visibility:hidden}
.welcome-box{text-align:center;padding:20px}
.welcome-logo{width:84px;height:84px;margin:0 auto 18px;display:grid;place-items:center;border-radius:22px;font-size:46px;color:var(--blue);background:rgba(56,189,248,.1);border:1px solid var(--border);animation:logoPulse 2.8s infinite}
.welcome-box h2{font-size:clamp(30px,6vw,46px);letter-spacing:-1px}
.welcome-box h2 span{color:var(--blue)}
.welcome-box p{color:var(--muted);margin:6px 0 24px}
.welcome-box small{display:block;margin-top:16px;color:var(--muted);font-size:12px}
.music-btn{position:fixed;bottom:22px;left:22px;z-index:100;width:43px;height:43px;border:1px solid var(--border);border-radius:12px;background:rgba(16,36,59,.95);color:var(--blue);font-size:18px;cursor:pointer;transition:.3s}
.music-btn:hover{background:var(--blue);color:var(--bg)}
.music-btn.playing{animation:bob 2s ease-in-out infinite;box-shadow:0 0 20px rgba(56,189,248,.35)}
</style>
</head>

<body>

<canvas id="particles" aria-hidden="true"></canvas>
<div class="glow glow-one"></div>
<div class="glow glow-two"></div>
<div class="bg-glow-3"></div>

<header>
<div class="navbar">
    <a href="#home" class="logo"><div class="logo-icon">⌘<img src="logo.png" alt="Logo XII TKJ A" onerror="this.style.display='none'"></div><div>XII <span>TKJ A</span></div></a>
    <button class="menu-toggle" id="menuToggle" aria-label="Buka menu" aria-expanded="false">☰</button>
    <nav id="navigation">
        <a href="#home" class="active">Home</a>
        <a href="#foto-kelas">Foto Kelas</a>
        <a href="#tentang">Tentang</a>
        <a href="#struktur">Struktur</a>
        <a href="#anggota">Anggota</a>
        <a href="#galeri">Galeri</a>
        <a href="#prestasi">Prestasi</a>
    </nav>
</div>
</header>

<main>

<!-- HOME -->
<section id="home">
<div class="container hero-grid">
    <div class="hero reveal">
        <div class="status"><span class="status-dot"></span>CLASS NETWORK: CONNECTED</div>
        <h1>One Class,<br><span class="gradient-text">One Family.</span></h1>
        <p class="hero-description">Selamat datang di rumah kedua kami di XII TKJ A. Tempat kami belajar teknologi, membangun koneksi, dan menciptakan kenangan bersama.</p>
        <div class="hero-buttons">
            <a href="#anggota" class="btn btn-primary">Lihat Anggota ↗</a>
            <a href="#tentang" class="btn btn-outline">Tentang Kelas</a>
        </div>
        <div class="hero-stats">
            <div><strong data-members data-count="30">0</strong><span>Anggota</span></div>
            <div><strong data-count="6">0</strong><span>Pengurus</span></div>
            <div><strong data-count="1">0</strong><span>Keluarga</span></div>
        </div>
        <div class="terminal">
            <div class="terminal-top"><span></span><span></span><span></span><div class="terminal-title">class-terminal.exe</div></div>
            <div class="terminal-body">
                <p><span class="prompt">leni@tkj-a:~$</span> <span id="terminalCommand">ping class-network</span></p>
                <p class="terminal-output" id="terminalOutput">Initializing connection...</p>
                <p><span class="prompt">leni@tkj-a:~$</span> <span class="cursor"></span></p>
            </div>
        </div>
    </div>

    <div class="network-visual reveal delay-2">
        <div class="brand-logos">
            <img src="logo-sekolah.png" alt="Logo Sekolah" onerror="this.style.display='none'">
            <span class="divider"></span>
            <img src="logo-kelas.png" alt="Logo XII TKJ A" onerror="this.style.display='none'">
        </div>
        <div class="network-card">
            <div class="network-card-title"><h3>◈ Network Topology</h3><span>● SYSTEM ONLINE</span></div>
            <div class="network-layout">
                <button type="button" class="device device-link" id="openBlog" aria-label="Buka daftar blog dan NIS siswa"><span class="device-icon">☁️</span><strong>Blog Siswa</strong><small id="topoBlogs">30 blog siswa</small></button>
                <div class="device"><span class="device-icon">🛡️</span><strong>Firewall</strong><small>Protected</small></div>
            </div>
            <div class="network-line"></div>
            <div class="network-layout">
                <div class="device"><span class="device-icon">🔀</span><strong>Switch</strong><small id="topoMembers">30 port aktif</small></div>
                <div class="device"><span class="device-icon">📶</span><strong>Access Point</strong><small>SSID: XII-TKJ-A</small></div>
            </div>
            <div class="network-footer"><span>PROTOCOL: <strong>TCP/IP</strong></span><span>STATUS: <strong>ACTIVE</strong></span></div>
        </div>
    </div>
</div>
</section>

<div class="marquee" aria-hidden="true"><div class="marquee-track"><span>NETWORKING</span><span>LINUX</span><span>SERVER</span><span>HARDWARE</span><span>PROGRAMMING</span><span>CISCO</span><span>MIKROTIK</span><span>TCP/IP</span><span>FIREWALL</span><span>ONE CLASS ONE FAMILY</span><span>NETWORKING</span><span>LINUX</span><span>SERVER</span><span>HARDWARE</span><span>PROGRAMMING</span><span>CISCO</span><span>MIKROTIK</span><span>TCP/IP</span><span>FIREWALL</span><span>ONE CLASS ONE FAMILY</span></div></div>

<!-- FOTO KELAS -->
<section id="foto-kelas">
<div class="container">
    <div class="section-heading reveal">
        <div class="eyebrow">OUR CLASS</div>
        <h2>Keluarga Besar <span class="gradient-text">XII TKJ A</span></h2>
        <p>Satu kelas, banyak cerita, dan kenangan yang berharga.</p>
        <div class="line"></div>
    </div>
    <div class="photo-frame reveal">
        <img src="tkja.jpeg" alt="Foto bersama keluarga besar XII TKJ A" loading="lazy">
        <div class="photo-caption">
            <h3>One Class, One Family.</h3>
            <p>Growing together, connecting forever.</p>
        </div>
    </div>
</div>
</section>

<!-- TENTANG -->
<section id="tentang">
<div class="container">
    <div class="section-heading reveal">
        <div class="eyebrow">ABOUT US</div>
        <h2>Tentang <span class="gradient-text">Kelas Kami</span></h2>
        <p>Mengenal lebih dekat XII TKJ A.</p>
        <div class="line"></div>
    </div>
    <div class="about-grid">
        <div class="info-card reveal">
            <div class="big-icon">🎓</div>
            <h3>XII TKJ A</h3>
            <p>Kelas yang menjadi tempat kami menuntut ilmu, saling membantu, dan mengembangkan kemampuan. Kami tumbuh bersama dalam perjalanan pendidikan dan mempersiapkan masa depan.</p>
        </div>
        <div class="info-card reveal delay-1">
            <div class="big-icon">💻</div>
            <h3>Teknik Komputer dan Jaringan</h3>
            <p>Mempelajari dunia komputer, jaringan, sistem operasi, server, dan teknologi informasi sebagai bekal menghadapi perkembangan dunia digital.</p>
            <div class="tech-tags"><span>Networking</span><span>Linux</span><span>Server</span><span>Hardware</span><span>Programming</span></div>
        </div>
    </div>
</div>
</section>

<!-- STRUKTUR -->
<section id="struktur">
<div class="container">
    <div class="section-heading reveal">
        <div class="eyebrow">CLASS ORGANIZATION</div>
        <h2>Struktur <span class="gradient-text">Kelas</span></h2>
        <p>Pengurus kelas XII TKJ A.</p>
        <div class="line"></div>
    </div>
    <div class="structure-grid">
        <div class="person-card teacher reveal">
            <img src="eka.jpeg" alt="Eka Karyati" class="teacher-photo" loading="lazy" onclick="openPhoto(this)" title="Klik untuk memperbesar foto">
            <div><small>Wali Kelas</small><h3>Eka Karyati</h3></div>
        </div>
        <div class="person-card reveal">
            <img src="hafid.jpeg" alt="Hafid" class="person-photo" loading="lazy">
            <div><small>Ketua Kelas</small><h3>Hafid</h3></div>
        </div>
        <div class="person-card reveal">
            <img src="keyza.jpeg" alt="Keyza" class="person-photo" loading="lazy">
            <div><small>Wakil Ketua</small><h3>Keyza</h3></div>
        </div>
        <div class="person-card reveal">
            <img src="khanza.jpeg" alt="Khanza" class="person-photo" loading="lazy">
            <div><small>Sekretaris</small><h3>Khanza</h3></div>
        </div>
        <div class="person-card reveal">
            <img src="salwa.jpeg" alt="Salwa" class="person-photo" loading="lazy">
            <div><small>Absensi</small><h3>Salwa</h3></div>
        </div>
        <div class="person-card reveal">
            <img src="dian.jpeg" alt="Dian" class="person-photo" loading="lazy">
            <div><small>Bendahara</small><h3>Dian</h3></div>
        </div>
    </div>
</div>
</section>

<!-- ANGGOTA -->
<section id="anggota">
<div class="container">
    <div class="section-heading reveal">
        <div class="eyebrow">OUR PEOPLE</div>
        <h2>Anggota <span class="gradient-text">Kelas</span></h2>
        <p>Keluarga besar XII TKJ A.</p>
        <div class="line"></div>
    </div>
    <div class="member-tools reveal">
        <input type="search" class="search-box" id="memberSearch" placeholder="Cari nama anggota..." aria-label="Cari nama anggota">
    </div>
    <p class="member-count">Menampilkan <strong id="memberCount">0</strong> dari <strong id="memberTotal">0</strong> anggota</p>
    <div class="members-grid" id="membersGrid"></div>
</div>
</section>

<!-- GALERI -->
<section id="galeri">
<div class="container">
    <div class="section-heading reveal">
        <div class="eyebrow">OUR MEMORIES</div>
        <h2>Galeri <span class="gradient-text">Kelas</span></h2>
        <p>Tempat menyimpan cerita dan momen kebersamaan.</p>
        <div class="line"></div>
    </div>
    <div class="gallery-grid">

        <button type="button" class="gallery-placeholder gallery-link reveal" id="openKebersamaan">
            <div class="gallery-icon">📸</div>
            <h3>Foto Kebersamaan</h3>
            <p>Klik untuk lihat foto kebersamaan.</p>
        </button>

        <button type="button" class="gallery-placeholder gallery-link reveal delay-1" id="openPraktik">
            <div class="gallery-icon">💻</div>
            <h3>Praktik TKJ</h3>
            <p>Klik untuk lihat foto praktik.</p>
        </button>

        <div class="gallery-placeholder reveal delay-2">
            <div class="gallery-icon">🎉</div>
            <h3>Momen Spesial</h3>
            <p>Kenangan yang tidak terlupakan.</p>
        </div>

    </div>
</div>
</section>

<!-- PRESTASI -->
<section id="prestasi">
<div class="container">
    <div class="section-heading reveal">
        <div class="eyebrow">OUR ACHIEVEMENTS</div>
        <h2>Prestasi <span class="gradient-text">Kelas</span></h2>
        <p>Ruang untuk mengabadikan pencapaian XII TKJ A.</p>
        <div class="line"></div>
    </div>

    <button type="button" class="achievement-box achievement-link reveal" id="openAchievement" aria-label="Buka galeri prestasi XII TKJ A">
        <div class="trophy">🏆</div>
        <h3>Every Achievement Starts with a Step</h3>
        <p>Setiap usaha dan pencapaian memiliki cerita. “Setiap langkah kecil yang kita lakukan hari ini membawa kelas kita ke puncak prestasi esok hari.”</p>
        <p>“Juara sejati adalah mereka yang terus belajar, bahkan setelah menang.”</p>
        <span class="achievement-hint">🖼️ Klik untuk melihat foto juara kelas</span>
    </button>
</div>
</section>

</main>

<footer>
<div class="container footer-inner">
    <div>
        <div class="footer-brand">XII TKJ A <span>/ 2026</span></div>
        <p>Connected by technology, united by friendship.</p>
    </div>
    <div class="footer-links"><a href="#home">Home</a><a href="#tentang">Tentang</a><a href="#struktur">Struktur</a><a href="#anggota">Anggota</a><a href="#galeri">Galeri</a></div>
    <p>© 2026 XII TKJ A. All rights reserved.</p>
</div>
</footer>

<!-- MODAL FOTO KEBERSAMAAN -->
<div class="modal" id="kebersamaanModal" role="dialog" aria-modal="true" aria-labelledby="kebersamaanTitle" hidden>
    <div class="modal-box">
        <div class="modal-head">
            <h3 id="kebersamaanTitle">Foto Kebersamaan</h3>
            <button type="button" class="modal-close" id="closeKebersamaan" aria-label="Tutup galeri">✕</button>
        </div>
        <div class="praktik-grid" id="kebersamaanGrid"></div>
    </div>
</div>

<!-- GALERI PRAKTIK -->
<div class="modal" id="praktikModal" role="dialog" aria-modal="true" aria-labelledby="praktikTitle" hidden>
    <div class="modal-box">
        <div class="modal-head">
            <h3 id="praktikTitle">Praktik TKJ</h3>
            <button type="button" class="modal-close" id="closePraktik" aria-label="Tutup galeri">✕</button>
        </div>
        <div class="praktik-grid" id="praktikGrid"></div>
    </div>
</div>

<!-- MODAL PRESTASI -->
<div class="modal" id="achievementModal" role="dialog" aria-modal="true" aria-labelledby="achievementTitle" hidden>
    <div class="modal-box achievement-modal-box">
        <div class="achievement-modal-head">
            <div class="achievement-modal-title">
                <span>🏆</span>
                <div>
                    <h3 id="achievementTitle">Prestasi XII TKJ A</h3>
                    <small>Dokumentasi foto juara dan pencapaian kelas</small>
                </div>
            </div>
            <button type="button" class="modal-close" id="closeAchievement" aria-label="Tutup galeri prestasi">✕</button>
        </div>
        <div class="achievement-grid" id="achievementGrid"></div>
    </div>
</div>

<!-- BLOG & NIS SISWA -->
<div class="modal" id="blogModal" role="dialog" aria-modal="true" aria-labelledby="blogTitle" hidden>
    <div class="modal-box">
        <div class="modal-head">
            <h3 id="blogTitle">Blog &amp; NIS Siswa</h3>
            <button type="button" class="modal-close" id="closeBlog" aria-label="Tutup daftar blog">✕</button>
        </div>
        <div class="blog-list" id="blogList"></div>
    </div>
</div>

<!-- FOTO DIPERBESAR -->
<div class="modal" id="lightbox" hidden>
    <img id="lightboxImg" src="" alt="">
</div>

<button class="back-top" id="backTop" aria-label="Kembali ke atas">↑</button>

<!-- MUSIK LATAR -->
<audio id="bgMusic" loop preload="auto">
    <source src="lagu.mp3" type="audio/mpeg">
</audio>

<div class="welcome" id="welcome">
    <div class="welcome-box">
        <div class="welcome-logo">⌘</div>
        <h2>XII <span>TKJ A</span></h2>
        <p>One Class, One Family.</p>
        <button type="button" class="btn btn-primary" id="enterBtn">Masuk ▶</button>
        <small>🔊 Website ini memakai musik latar</small>
    </div>
</div>

<button type="button" class="music-btn" id="musicBtn" aria-label="Putar atau jeda musik">🔇</button>

<script>
/* DAFTAR ANGGOTA */
const members = [
    ["Andra","andra.jpeg"],["Ani","ani.jpeg"],["Bani","bani.jpeg"],["Derrick","derrick.jpeg"],
    ["Dian","dian.jpeg"],["Diki","diki.jpeg"],["Fahmi","fahmi.jpeg"],["Farel","farel.jpeg"],
    ["Gara","gara.jpeg"],["Ginan","ginan.jpeg"],["Hafid","hafid.jpeg"],["Kayla","kayla.jpeg"],
    ["Khanza","khanza.jpeg"],["Kun","kun.jpeg"],["Leni","leni.jpg"],["Rafi","rafi.jpeg"],
    ["Aldi","aldi.jpeg"],["Haikal","haikal.jpeg"],["Yuga","yuga.jpeg"],["Mulyadi","mulyadi.jpg"],
    ["Opik","opik.jpeg"],["Keyza","keyza.jpeg"],["Radit","radit.jpeg"],["Rahma","rahma.jpeg"],
    ["Ravael","ravael.jpg"],["Ridho","ridho.jpeg"],["Rifa","rifa.jpeg"],["Salsha","salsha.jpeg"],
    ["Salwa","salwa.jpeg"],["Tia","tia.jpeg"]
];

/* FOTO KEBERSAMAAN: isi dengan nama file foto, jumlah bebas */
const kebersamaanPhotos = [
    "kebersamaan1.jpeg", "kebersamaan2.jpeg", "kebersamaan3.jpeg", "kebersamaan4.jpeg", "kebersamaan5.jpeg", "kebersamaan6.jpeg",
    "kebersamaan7.jpeg", "kebersamaan8.jpeg", "kebersamaan9.jpeg", "kebersamaan10.jpeg", "kebersamaan11.jpeg", "kebersamaan12.jpeg",
    "kebersamaan13.jpeg", "kebersamaan14.jpeg",
];

/* FOTO PRAKTIK TKJ */
const praktikPhotos = [
    "praktik1.jpeg", "praktik2.jpeg", "praktik3.jpeg",
    "praktik4.jpeg", "praktik5.jpeg", "praktik6.jpeg"
];

/* FOTO PRESTASI: tambah foto dan ubah judul di sini */
const achievementPhotos = [
    {foto: "prestasi2.jpeg", judul: "Juara 1 Futsal liga jaringan 2025"},
    {foto: "prestasi1.jpeg", judul: "Juara 1 Futsal liga jaringan 2026"},
    {foto: "prestasi3.jpeg", judul: "Juara 2 Kelas terbersih 2026"}
];

/* FOTO CADANGAN */
const placeholder = "data:image/svg+xml," + encodeURIComponent(
    '<svg xmlns="http://www.w3.org/2000/svg" width="300" height="300"><rect fill="#10243b" width="300" height="300"/><text x="50%" y="50%" fill="#38bdf8" font-size="90" text-anchor="middle" dy=".35em">?</text></svg>'
);
document.addEventListener("error", e => {
    const img = e.target;
    if (img.tagName === "IMG" && img.src !== placeholder) img.src = placeholder;
}, true);

/* BUAT KARTU ANGGOTA */
const membersGrid = document.getElementById("membersGrid");
const memberCount = document.getElementById("memberCount");
document.getElementById("memberTotal").textContent = members.length;

members.forEach(([name, file], i) => {
    const card = document.createElement("article");
    card.className = "member-card reveal";
    card.innerHTML =
        '<img src="' + file + '" alt="' + name + '" class="member-photo" loading="lazy">' +
        '<span class="member-number">' + String(i + 1).padStart(2, "0") + '</span>' +
        '<h3>' + name + '</h3>';
    membersGrid.appendChild(card);
});
memberCount.textContent = members.length;
document.getElementById("topoMembers").textContent = members.length + " port aktif";

/* MENU MOBILE */
const menuToggle = document.getElementById("menuToggle");
const navigation = document.getElementById("navigation");
function closeMenu() {
    navigation.classList.remove("open");
    menuToggle.setAttribute("aria-expanded", "false");
    menuToggle.textContent = "☰";
}
menuToggle.addEventListener("click", () => {
    const isOpen = navigation.classList.toggle("open");
    menuToggle.setAttribute("aria-expanded", isOpen);
    menuToggle.textContent = isOpen ? "✕" : "☰";
});
document.querySelectorAll("#navigation a").forEach(l => l.addEventListener("click", closeMenu));

/* TERMINAL */
const terminalMessages = [
    {command: "ping class-network", output: "Reply from class-network: time=12ms"},
    {command: "ipconfig /all", output: "Network adapter: CONNECTED"},
    {command: "systemctl status network", output: "Network service: ACTIVE"},
    {command: "echo Welcome to XII TKJ A", output: "Connection established. Welcome!"}
];
let terminalIndex = 0;
function updateTerminal() {
    const m = terminalMessages[terminalIndex];
    document.getElementById("terminalCommand").textContent = m.command;
    document.getElementById("terminalOutput").textContent = m.output;
    terminalIndex = (terminalIndex + 1) % terminalMessages.length;
}
updateTerminal();
setInterval(updateTerminal, 3500);

/* SCROLL REVEAL */
const revealElements = document.querySelectorAll(".reveal");
if ("IntersectionObserver" in window) {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target);
            }
        });
    }, {threshold: 0.08});
    revealElements.forEach(el => observer.observe(el));
} else {
    revealElements.forEach(el => el.classList.add("visible"));
}

/* PENCARIAN ANGGOTA */
const memberSearch = document.getElementById("memberSearch");
memberSearch.addEventListener("input", () => {
    const query = memberSearch.value.trim().toLowerCase();
    let visible = 0;
    membersGrid.querySelectorAll(".member-card").forEach(card => {
        const match = card.querySelector("h3").textContent.toLowerCase().includes(query);
        card.style.display = match ? "" : "none";
        if (match) visible++;
    });
    memberCount.textContent = visible;
    membersGrid.querySelector(".no-results")?.remove();
    if (visible === 0) {
        const msg = document.createElement("p");
        msg.className = "no-results";
        msg.textContent = "Nama anggota tidak ditemukan.";
        membersGrid.appendChild(msg);
    }
});

/* MODAL & LIGHTBOX */
const kebersamaanModal = document.getElementById("kebersamaanModal");
const kebersamaanGrid = document.getElementById("kebersamaanGrid");
const praktikModal = document.getElementById("praktikModal");
const praktikGrid = document.getElementById("praktikGrid");
const achievementModal = document.getElementById("achievementModal");
const achievementGrid = document.getElementById("achievementGrid");
const lightbox = document.getElementById("lightbox");
const lightboxImg = document.getElementById("lightboxImg");

/* buka foto besar dari galeri mana pun */
function showPhoto(src, alt) {
    lightboxImg.src = src;
    lightboxImg.alt = alt;
    lightbox.hidden = false;
    document.body.style.overflow = "hidden";
}

/* FOTO KEBERSAMAAN */
kebersamaanPhotos.forEach((file, i) => {
    const img = document.createElement("img");
    img.src = file;
    img.alt = "Foto kebersamaan " + (i + 1);
    img.loading = "lazy";
    img.addEventListener("click", () => showPhoto(img.src, img.alt));
    kebersamaanGrid.appendChild(img);
});

/* FOTO PRAKTIK */
praktikPhotos.forEach((file, i) => {
    const img = document.createElement("img");
    img.src = file;
    img.alt = "Foto praktik TKJ " + (i + 1);
    img.loading = "lazy";
    img.addEventListener("click", () => showPhoto(img.src, img.alt));
    praktikGrid.appendChild(img);
});

/* FOTO PRESTASI */
achievementPhotos.forEach((item, i) => {
    const wrapper = document.createElement("div");

    const img = document.createElement("img");
    img.src = item.foto;
    img.alt = item.judul;
    img.className = "achievement-photo";
    img.loading = "lazy";
    img.addEventListener("click", () => showPhoto(img.src, item.judul));

    const title = document.createElement("h4");
    title.textContent = item.judul;
    title.style.color = "#edf6ff";
    title.style.fontSize = "13px";
    title.style.textAlign = "center";
    title.style.marginTop = "10px";

    const number = document.createElement("div");
    number.className = "achievement-number";
    number.textContent = "Dokumentasi Prestasi " + (i + 1);

    wrapper.appendChild(img);
    wrapper.appendChild(title);
    wrapper.appendChild(number);
    achievementGrid.appendChild(wrapper);
});

/* FOTO WALI KELAS */
function openPhoto(img) {
    showPhoto(img.src, img.alt);
}

/* TUTUP FOTO BESAR (jendela galeri di belakangnya tetap terbuka) */
function closePhoto() {
    lightbox.hidden = true;
    lightboxImg.src = "";
    lightboxImg.alt = "";
    if (kebersamaanModal.hidden && praktikModal.hidden && achievementModal.hidden) {
        document.body.style.overflow = "";
    }
}

/* GALERI KEBERSAMAAN */
function openKebersamaan() {
    kebersamaanModal.hidden = false;
    document.body.style.overflow = "hidden";
}
function closeKebersamaan() {
    lightbox.hidden = true;
    kebersamaanModal.hidden = true;
    lightboxImg.src = "";
    document.body.style.overflow = "";
}
document.getElementById("openKebersamaan").addEventListener("click", openKebersamaan);
document.getElementById("closeKebersamaan").addEventListener("click", closeKebersamaan);
kebersamaanModal.addEventListener("click", e => { if (e.target === kebersamaanModal) closeKebersamaan(); });

/* GALERI PRAKTIK */
function openPraktik() {
    praktikModal.hidden = false;
    document.body.style.overflow = "hidden";
}
function closePraktik() {
    lightbox.hidden = true;
    praktikModal.hidden = true;
    lightboxImg.src = "";
    document.body.style.overflow = "";
}
document.getElementById("openPraktik").addEventListener("click", openPraktik);
document.getElementById("closePraktik").addEventListener("click", closePraktik);
praktikModal.addEventListener("click", e => { if (e.target === praktikModal) closePraktik(); });

/* GALERI PRESTASI */
function openAchievement() {
    achievementModal.hidden = false;
    document.body.style.overflow = "hidden";
}
function closeAchievement() {
    lightbox.hidden = true;
    achievementModal.hidden = true;
    lightboxImg.src = "";
    lightboxImg.alt = "";
    document.body.style.overflow = "";
}
document.getElementById("openAchievement").addEventListener("click", openAchievement);
document.getElementById("closeAchievement").addEventListener("click", closeAchievement);
achievementModal.addEventListener("click", e => { if (e.target === achievementModal) closeAchievement(); });

/* KLIK LUAR FOTO */
lightbox.addEventListener("click", e => { if (e.target === lightbox) closePhoto(); });

/* ESC UNTUK MENUTUP */
document.addEventListener("keydown", e => {
    if (e.key !== "Escape") return;
    if (!lightbox.hidden) closePhoto();
    else if (!achievementModal.hidden) closeAchievement();
    else if (!kebersamaanModal.hidden) closeKebersamaan();
    else if (!praktikModal.hidden) closePraktik();
});

/* BLOG & NIS SISWA */
const blogData = {
    "Andra":   {blog: "", nis: ""},
    "Ani":     {blog: "", nis: ""},
    "Bani":    {blog: "https://banisukajeketifortyeight.blogspot.com/", nis: ""},
    "Derrick": {blog: "https://derrickforyou.blogspot.com/", nis: ""},
    "Dian":    {blog: "https://dianveliana.blogspot.com/", nis: ""},
    "Diki":    {blog: "https://dikisajah.blogspot.com/", nis: ""},
    "Fahmi":   {blog: "https://fahmiwelah.blogspot.com/", nis: ""},
    "Farel":   {blog: "https://akangfarell.blogspot.com/", nis: ""},
    "Gara":    {blog: "https://gararz.blogspot.com/", nis: ""},
    "Ginan":   {blog: "", nis: ""},
    "Hafid":   {blog: "https://hafidnurarif.blogspot.com/", nis: ""},
    "Kayla":   {blog: "https://kaylamulyaniputri.blogspot.com/", nis: ""},
    "Khanza":  {blog: "https://khanzaputriaqeela.blogspot.com/", nis: ""},
    "Kun":     {blog: "https://fathecto.blogspot.com/", nis: ""},
    "Leni":    {blog: "https://lenirhmwt.blogspot.com/", nis: "2425050918"},
    "Rafi":    {blog: "https://rafifreefire.blogspot.com/", nis: ""},
    "Aldi":    {blog: "https://aldiwedonttalkanymore.blogspot.com/", nis: ""},
    "Haikal":  {blog: "", nis: ""},
    "Yuga":    {blog: "https://masyuga.blogspot.com/", nis: ""},
    "Mulyadi": {blog: "https://ulemulyadi12.blogspot.com/", nis: ""},
    "Opik":    {blog: "https://opikxirey.blogspot.com/", nis: ""},
    "Keyza":   {blog: "https://putrikeyzamaylani.blogspot.com/", nis: ""},
    "Radit":   {blog: "https://raditferdi54.blogspot.com/", nis: ""},
    "Rahma":   {blog: "", nis: ""},
    "Ravael":  {blog: "https://26ravael.blogspot.com/", nis: ""},
    "Ridho":   {blog: "https://ridhoooalbanyyy.blogspot.com/", nis: ""},
    "Rifa":    {blog: "https://azzahrarifa55.blogspot.com/", nis: ""},
    "Salsha":  {blog: "", nis: ""},
    "Salwa":   {blog: "https://salwaoktapiani.blogspot.com/", nis: ""},
    "Tia":     {blog: "https://tiarhodiatussholehah.blogspot.com/", nis: ""}
};

const blogModal = document.getElementById("blogModal");
const blogList = document.getElementById("blogList");
document.getElementById("topoBlogs").textContent = members.length + " blog siswa";

members.forEach(([name]) => {
    const d = blogData[name] || {};
    const row = document.createElement("div");
    row.className = "blog-item";

    const info = document.createElement("div");
    const nameEl = document.createElement("strong");
    nameEl.textContent = name;
    const nisEl = document.createElement("small");
    nisEl.textContent = d.nis ? "NIS: " + d.nis : "NIS: belum diisi";
    info.append(nameEl, nisEl);
    row.appendChild(info);

    if (d.blog) {
        const link = document.createElement("a");
        link.className = "blog-visit";
        link.href = d.blog;
        link.target = "_blank";
        link.rel = "noopener";
        link.textContent = "Buka blog ↗";
        row.appendChild(link);
    } else {
        const empty = document.createElement("span");
        empty.className = "blog-empty";
        empty.textContent = "Belum ada blog";
        row.appendChild(empty);
    }
    blogList.appendChild(row);
});

function openBlog() {
    blogModal.hidden = false;
    document.body.style.overflow = "hidden";
}
function closeBlog() {
    blogModal.hidden = true;
    document.body.style.overflow = "";
}
document.getElementById("openBlog").addEventListener("click", openBlog);
document.getElementById("closeBlog").addEventListener("click", closeBlog);
blogModal.addEventListener("click", e => { if (e.target === blogModal) closeBlog(); });
document.addEventListener("keydown", e => { if (e.key === "Escape" && !blogModal.hidden) closeBlog(); });

/* TOMBOL KE ATAS + MENU AKTIF */
const backTop = document.getElementById("backTop");
const navLinks = document.querySelectorAll("#navigation a");
const pageSections = document.querySelectorAll("main section[id]");
window.addEventListener("scroll", () => {
    backTop.classList.toggle("show", window.scrollY > 400);
    let current = "home";
    pageSections.forEach(s => { if (window.scrollY >= s.offsetTop - 150) current = s.id; });
    navLinks.forEach(l => l.classList.toggle("active", l.getAttribute("href") === "#" + current));
}, {passive: true});
backTop.addEventListener("click", () => window.scrollTo({top: 0, behavior: "smooth"}));

/* PARTIKEL JARINGAN */
const canvas = document.getElementById("particles");
const ctx = canvas.getContext("2d");
const reduceMotion = {matches: false}; /* partikel selalu bergerak */
let width = 0, height = 0, points = [], frame = null, lastFrame = 0;

function createPoints() {
    const count = Math.min(95, Math.max(35, Math.floor(width * height / 13000)));
    points = Array.from({length: count}, () => ({
        x: Math.random() * width, y: Math.random() * height,
        vx: (Math.random() - 0.5) * 0.9, vy: (Math.random() - 0.5) * 0.9,
        r: Math.random() * 1.8 + 1
    }));
}
function resizeCanvas() {
    const dpr = Math.min(window.devicePixelRatio || 1, 2);
    width = window.innerWidth;
    height = window.innerHeight;
    canvas.width = width * dpr;
    canvas.height = height * dpr;
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
    createPoints();
    drawNetwork();
}
function drawNetwork() {
    ctx.clearRect(0, 0, width, height);
    const maxDist = width < 600 ? 110 : 160;
    for (let i = 0; i < points.length; i++) {
        const p = points[i];
        for (let j = i + 1; j < points.length; j++) {
            const q = points[j];
            const d = Math.hypot(p.x - q.x, p.y - q.y);
            if (d < maxDist) {
                ctx.beginPath();
                ctx.moveTo(p.x, p.y);
                ctx.lineTo(q.x, q.y);
                ctx.strokeStyle = "rgba(56,189,248," + (1 - d / maxDist) * 0.4 + ")";
                ctx.lineWidth = 0.7;
                ctx.stroke();
            }
        }
        ctx.beginPath();
        ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
        ctx.fillStyle = "rgba(125,200,255,0.85)";
        ctx.fill();
    }
}
function animateNetwork(t) {
    if (document.hidden || reduceMotion.matches) { frame = null; return; }
    if (t - lastFrame >= 16) {
        lastFrame = t;
        points.forEach(p => {
            p.x += p.vx; p.y += p.vy;
            if (p.x < 0 || p.x > width) p.vx *= -1;
            if (p.y < 0 || p.y > height) p.vy *= -1;
        });
        drawNetwork();
    }
    frame = requestAnimationFrame(animateNetwork);
}
function startNetwork() {
    if (frame !== null || reduceMotion.matches) return;
    frame = requestAnimationFrame(animateNetwork);
}
function stopNetwork() {
    if (frame !== null) { cancelAnimationFrame(frame); frame = null; }
}
document.addEventListener("visibilitychange", () => document.hidden ? stopNetwork() : startNetwork());
window.addEventListener("resize", resizeCanvas);
resizeCanvas();
startNetwork();
</script>

<script>
/* ANIMASI TAMBAHAN */
(function () {
    document.querySelectorAll(".member-card").forEach((c, i) => c.style.setProperty("--i", i % 3));

    document.addEventListener("mousemove", e => {
        const card = e.target.closest?.(".member-card,.info-card,.person-card,.gallery-placeholder");
        if (!card) return;
        const r = card.getBoundingClientRect();
        card.style.setProperty("--mx", (e.clientX - r.left) + "px");
        card.style.setProperty("--my", (e.clientY - r.top) + "px");
    }, {passive: true});

    const bar = document.createElement("div");
    bar.className = "scroll-progress";
    document.body.appendChild(bar);
    const updateBar = () => {
        const max = document.documentElement.scrollHeight - window.innerHeight;
        bar.style.width = (max > 0 ? window.scrollY / max * 100 : 0) + "%";
    };
    window.addEventListener("scroll", updateBar, {passive: true});
    updateBar();

    if (!matchMedia("(hover:none)").matches && !matchMedia("(prefers-reduced-motion: reduce)").matches) {
        const glow = document.createElement("div");
        glow.className = "cursor-glow";
        document.body.appendChild(glow);
        let tx = innerWidth / 2, ty = innerHeight / 2, x = tx, y = ty;
        addEventListener("mousemove", e => { tx = e.clientX; ty = e.clientY; }, {passive: true});
        (function loop() {
            x += (tx - x) * 0.12;
            y += (ty - y) * 0.12;
            glow.style.transform = "translate(" + x + "px," + y + "px)";
            requestAnimationFrame(loop);
        })();
    }
})();
</script>

<script>
/* UPGRADE PREMIUM */
(function () {
    const header = document.querySelector("header");
    const onScroll = () => header.classList.toggle("scrolled", window.scrollY > 30);
    window.addEventListener("scroll", onScroll, {passive: true});
    onScroll();

    const memberStat = document.querySelector("[data-members]");
    if (memberStat) memberStat.dataset.count = document.querySelectorAll(".member-card").length || 30;
    document.querySelectorAll(".hero-stats strong").forEach(el => {
        const target = +el.dataset.count, start = performance.now(), dur = 1500;
        (function tick(now) {
            const t = Math.min((now - start) / dur, 1);
            el.textContent = Math.round(target * (1 - Math.pow(1 - t, 3)));
            if (t < 1) requestAnimationFrame(tick);
        })(start);
    });

    if (matchMedia("(hover:hover)").matches) {
        document.querySelectorAll(".member-card,.info-card,.person-card:not(.teacher),.photo-frame").forEach(el => {
            el.classList.add("tilt");
            el.addEventListener("mousemove", e => {
                const r = el.getBoundingClientRect();
                const x = (e.clientX - r.left) / r.width - 0.5;
                const y = (e.clientY - r.top) / r.height - 0.5;
                el.style.setProperty("--rx", (-y * 7) + "deg");
                el.style.setProperty("--ry", (x * 9) + "deg");
            });
            el.addEventListener("mouseleave", () => {
                el.style.setProperty("--rx", "0deg");
                el.style.setProperty("--ry", "0deg");
            });
        });
    }
})();
</script>

<script>
/* MUSIK LATAR */
(function () {
    const audio = document.getElementById("bgMusic");
    const welcome = document.getElementById("welcome");
    const enterBtn = document.getElementById("enterBtn");
    const musicBtn = document.getElementById("musicBtn");
    let resumeAfterTab = false;

    audio.volume = 0.5; /* 0 sampai 1, ubah kalau mau lebih pelan atau keras */
    document.body.style.overflow = "hidden";

    const setUI = playing => {
        musicBtn.classList.toggle("playing", playing);
        musicBtn.textContent = playing ? "🎵" : "🔇";
    };

    enterBtn.addEventListener("click", () => {
        audio.play().then(() => setUI(true)).catch(() => setUI(false));
        welcome.classList.add("hide");
        document.body.style.overflow = "";
    });

    musicBtn.addEventListener("click", () => {
        if (audio.paused) { audio.play().then(() => setUI(true)).catch(() => setUI(false)); }
        else { audio.pause(); setUI(false); }
    });

    /* musik berhenti saat pindah tab, lanjut saat kembali */
    document.addEventListener("visibilitychange", () => {
        if (document.hidden && !audio.paused) { audio.pause(); resumeAfterTab = true; }
        else if (!document.hidden && resumeAfterTab) { resumeAfterTab = false; audio.play(); }
    });

    setUI(false);
})();
</script>

</body>
</html>