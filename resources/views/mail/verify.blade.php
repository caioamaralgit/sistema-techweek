<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>Verificação de Conta</title>        
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body style="background-color: #F8FAFC; color: #636B6F; font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size: 16px; text-align: center;">
        <header style="background-color: #FFFFFF; border-bottom: 2px solid #AAA; font-size: 20px; padding: 0.5rem 1rem;">
            <a href="{!! url('/') !!}" target="_blank" style="color: #636B6F; text-decoration: none;" title="Visitar site Techweek">
                <img src="{!! url('/') !!}/img/logo.png" alt="Logo" style="margin-right: 10px;" width="30" /> Techweek
            </a>
        </header>
        <h1>Verificação de Conta</h1>
        <section>
            Para acessar os recursos da Techweek confirme sua conta utilizando o botão abaixo.
            <div style="margin: 15px;">
                <a href="{!! $link !!}" target="_blank" style="text-decoration: none;" title="Confirmar Conta">
                    <div style="background-color: #3097D1; border-radius: 5px; color: #FFFFFF; cursor: pointer; display: table-cell; padding: 5px 10px;">
                        Confirmar Conta
                    </div>
                </a>
            </div>
        </section><br /><br />
        <section style="font-size: 12px; margin: auto; max-width: 800px;">
            Caso não consiga acessar a conta utilizando o botão, copie e cole o link abaixo em seu navegador. <br />
            <a href="{!! $link !!}" target="_blank" title="Confirmar Conta">{!! $link !!}</a>
        </section>
        <br /><br />
    </body>
</html>
