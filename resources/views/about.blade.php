<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
    <style>
        :root{
            --bg-1:#071028;
            --bg-2:#071827;
            --card:#071429;
            --accent:#06b6d4;
            --accent-2:#7c3aed;
            --muted:#9fb3c8;
            --glass: rgba(255,255,255,0.04);
        }
        *{box-sizing:border-box}
        body{font-family: Inter, Arial, Helvetica, sans-serif;background:linear-gradient(180deg,var(--bg-1) 0%, var(--bg-2) 70%);color:#e6eef6;margin:0;padding:36px 18px;}
        .wrap{max-width:1100px;margin:0 auto;padding:28px}
        header{display:flex;align-items:center;justify-content:space-between;margin-bottom:28px}
        header h1{font-size:30px;letter-spacing:0.4px;margin:0}
        header p{color:var(--muted);margin:6px 0 0}
        .cta a{background:linear-gradient(90deg,var(--accent),var(--accent-2));padding:10px 16px;border-radius:10px;color:#021025;text-decoration:none;font-weight:600}

        .profiles{display:grid;grid-template-columns:1fr 1fr;gap:22px}
        .card{
            background: linear-gradient(180deg, rgba(255,255,255,0.02), rgba(255,255,255,0.01));
            border-radius:14px;padding:18px;border:1px solid rgba(255,255,255,0.03);
            box-shadow: 0 10px 30px rgba(2,6,23,0.6);
            display:flex;gap:16px;align-items:flex-start;transition:transform .25s ease, box-shadow .25s ease;
        }
        .card:hover{transform:translateY(-8px);box-shadow:0 26px 60px rgba(2,6,23,0.85)}

        .avatar{
            width:108px;height:108px;border-radius:16px;background:linear-gradient(135deg,var(--accent),var(--accent-2));flex-shrink:0;display:flex;align-items:center;justify-content:center;font-weight:800;font-size:34px;color:#021025;box-shadow:inset 0 -8px 24px rgba(0,0,0,0.12)
        }
        .info{flex:1}
        .info-header{display:flex;align-items:center;justify-content:space-between;gap:10px}
        .info h2{margin:0 0 6px 0;font-size:20px}
        .meta{color:var(--muted);font-size:14px;margin-bottom:12px}
        .bio{background:var(--glass);padding:12px;border-radius:8px;color:#dbeafe;margin-bottom:12px}
        .list{margin:6px 0 0 0;padding:0;list-style:none;display:flex;flex-wrap:wrap;gap:8px}
        .chip{background:rgba(255,255,255,0.03);padding:6px 10px;border-radius:999px;font-size:13px;color:var(--muted);border:1px solid rgba(255,255,255,0.02)}
        .actions{display:flex;gap:10px;align-items:center}
        .btn-outline{color:var(--accent);border:1px solid rgba(6,182,212,0.18);padding:8px 12px;border-radius:10px;text-decoration:none;font-weight:600}

        @media (max-width:900px){
            .profiles{grid-template-columns:1fr;}
            body{padding:18px}
            .avatar{width:88px;height:88px;font-size:28px}
            header{flex-direction:column;align-items:flex-start;gap:10px}
        }
    </style>
</head>
<body>
    <div class="wrap">
        <header>
            <div>
                <h1>Sobre Nós</h1>
                <p>Apresentação dos integrantes da dupla — Matheus & Daniel</p>
            </div>
            <div class="cta">
                <a href="{{ route('contato') }}">Entrar em contato</a>
            </div>
        </header>

        <section class="profiles">
            <article class="card">
                <div class="avatar">MM</div>
                <div class="info">
                    <div class="info-header">
                        <h2>Matheus Morais <span style="color:var(--accent);font-size:13px;margin-left:8px">(17 anos)</span></h2>
                        <div class="actions">
                           
                        </div>
                    </div>
                    <div class="meta">Mora em Cruzeiro • Estudante • Sonho: trabalhar no exterior</div>
                    <div class="bio">
                        <p style="margin:0">Sou Matheus, tenho 17 anos e moro em Cruzeiro. Estou estudando programação e meu objetivo é trabalhar com linguagens como Java, C++ e Python. Busco oportunidades no exterior para crescer profissionalmente e ganhar experiência internacional.</p>
                    </div>
                    <ul class="list" aria-hidden="true">
                        <li class="chip">Java</li>
                        <li class="chip">C++</li>
                        <li class="chip">Python</li>
                        <li class="chip">Back-end</li>
                    </ul>
                </div>
            </article>

            <article class="card">
                <div class="avatar">DV</div>
                <div class="info">
                    <div class="info-header">
                        <h2>Daniel Victor <span style="color:var(--accent);font-size:13px;margin-left:8px">(17 anos)</span></h2>
                        <div class="actions">
                            
                        </div>
                    </div>
                    <div class="meta">Mora em Cruzeiro • Estudante • Sonho: me tornar um web designer</div>
                    <div class="bio">
                        <p style="margin:0">Me chamo Daniel, tenho 17 anos. Faço curso de Desenvolvimento de Sistemas e pretendo trabalhar posteriormente utilizando HTML, CSS e JavaScript. Meu sonho é me tornar um web designer e criar sites incríveis no futuro.</p>
                    </div>
                    <ul class="list" aria-hidden="true">
                        <li class="chip">Java</li>
                        <li class="chip">CSS</li>
                        <li class="chip">HTML</li>
                        <li class="chip">Front-end</li>
                    </ul>
                </div>
            </article>
        </section>

    </div>
</body>
</html>
