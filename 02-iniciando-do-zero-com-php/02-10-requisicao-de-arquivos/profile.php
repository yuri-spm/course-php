
<article style="
padding:  20px;
background: #eeeeee;
border-radius: 4px;
">
    <h1><?=$profile->name;?></h1>
    <p>
        Trabalha na <?=$profile->company;?></br>
        <a title="Enviar E-mail" href="mailto:?=$profile->email;?>">Enviar E-mail</a>
    </p>
</article>