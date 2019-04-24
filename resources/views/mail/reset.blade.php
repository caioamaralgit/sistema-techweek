<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Recuperação de Senha</title>        
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body style="background-color: #F8FAFC; color: #636B6F; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 16px; text-align: center;">
        <header style="background-color: #FFFFFF; border-bottom: 2px solid #AAA; font-size: 20px; padding: 0.5rem 1rem;">
            <a href="{!! url('/') !!}" target="_blank" style="color: #636B6F; text-decoration: none;" title="Visitar site Techweek">
                <img src="{!! url('/') !!}/img/logo.png" alt="Logo" style="margin-right: 10px;" width="30" /> Techweek
            </a>
        </header>
        <h1>Recuperação de Senha</h1>
        <section>
            Para criar uma nova senha para sua conta utilize o botão abaixo.
            <div style="margin: 15px;">
                <a href="{!! $link !!}" target="_blank" style="text-decoration: none;" title="Recuperar Senha">
                    <div style="background-color: #3097D1; border-radius: 5px; color: #FFFFFF; cursor: pointer; display: table-cell; padding: 5px 10px;">
                        Recuperar Senha
                    </div>
                </a>
            </div>
        </section><br /><br />
        <section style="font-size: 12px; margin: auto; max-width: 800px;">
            Caso não consiga acessar o link utilizando o botão, copie e cole o link abaixo em seu navegador. <br />
            <a href="{!! $link !!}" target="_blank" title="Recuperar Senha">{!! $link !!}</a>
        </section>
        <br /><br />
    </body>
</html>
