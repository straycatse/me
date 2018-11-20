<aside>
    <header>
      <h1>Admin</h1>
    </header>
    <ul>
        <li><a class="<?= basename($_SERVER['REQUEST_URI']) == "session.php?page=write_admin" ? "selected" : ""; ?>" href="?page=write_admin">Databasinfo</a></li>
        <li><a class="<?= basename($_SERVER['REQUEST_URI']) == "session.php?page=admin_create" ? "selected" : ""; ?>" href="?page=admin_create">Lägg till rad</a></li>
        <li><a class="<?= basename($_SERVER['REQUEST_URI']) == "session.php?page=admin_update" ? "selected" : ""; ?>" href="?page=admin_update">Uppdatera rad</a></li>
        <li><a class="<?= basename($_SERVER['REQUEST_URI']) == "session.php?page=admin_delete" ? "selected" : ""; ?>" href="?page=admin_delete">Ta bort rad</a></li>
        <li><a class="<?= basename($_SERVER['REQUEST_URI']) == "session.php?page=admin_init" ? "selected" : ""; ?>" href="?page=admin_init">Töm och återinitiera databas</a></li>
</aside>
