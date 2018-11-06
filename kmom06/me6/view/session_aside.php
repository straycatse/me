<aside>
    <header>
      <h1>Session</h1>
    </header>
    <ul>
        <li><a class="<?= basename($_SERVER['REQUEST_URI']) == "session.php?page=write_session" ? "selected" : ""; ?>" href="?page=write_session">Info om session</a></li>
        <li><a class="<?= basename($_SERVER['REQUEST_URI']) == "session.php?page=destroy_session" ? "selected" : ""; ?>" href="?page=destroy_session">Förstör session</a></li>
        <li><a class="<?= basename($_SERVER['REQUEST_URI']) == "session.php?page=number_session" ? "selected" : ""; ?>" href="?page=number_session">Dubblerar värdet "number"</a></li>
        <li><a class="<?= basename($_SERVER['REQUEST_URI']) == "session.php?page=contact_post" ? "selected" : ""; ?>" href="?page=contact_post">Kontakt</a></li>
        <li><a class="<?= basename($_SERVER['REQUEST_URI']) == "session.php?page=flash_post" ? "selected" : ""; ?>" href="?page=flash_post">Flashmeddelande</a></li>
        <li><a class="<?= basename($_SERVER['REQUEST_URI']) == "session.php?page=stylechooser" ? "selected" : ""; ?>" href="?page=stylechooser">Stylechooser</a></li>
</aside>
