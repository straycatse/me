<aside>
    <nav>
      <ul class="list-unstyled">
        <h3>Samtliga objekt</h3>
        <?php foreach ($objects as $object) : ?>
              <div class="objectAside">
                <a href="single_object.php?id=<?php echo $object['id']; ?>">
                    <p><?php echo $object['title'] ?></p>
                </a>
              </div>
          <?php endforeach ?>
        </ul>
    </nav>
</aside>
