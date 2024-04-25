<footer class="lh-1 pt-3 mt-4 text-body-secondary">
  <nav class="py-2">
    <div class="container d-md-flex justify-content-md-end">
      <ul class="nav">
        <?php foreach ($footerLinks as $key => $val): ?>
            <li class="nav-item"><a href="<?php echo $val ?>" class="nav-link link-body-emphasis px-2"><?php echo $key ?></a></li>
        <?php endforeach ?>
      </ul>
    </div>
  </nav>
  <div class="border-top mt-3"></div>
  <p class="text-body-tertiary text-center mt-4"><small>© <?php echo date("Y"); ?> <?php echo $shorttitle; ?> <i class="bi bi-dot"></i> <a href="https://github.com/ookris/QUrl" target="_blank">QUrl Theme</a> <?php echo $qurlLang['footer_design_by']; ?> <a href="https://qurl.pl">QUrl.pl</a> <i class="bi bi-plus-lg"></i> <a href="https://getbootstrap.com" target="_blank">Bootstrap</a> <i class="bi bi-three-dots-vertical"></i> <?php echo $qurlLang['footer_powered_by']; ?> <a href="https://yourls.org" target="_blank">YOURLS</a><i class="bi bi-three-dots-vertical"></i> Logo <a href="https://www.flaticon.com/free-icons/url" title="url icons">Flaticon</a></p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<!-- tooltip -->
<script>
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
  const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
</script>

<!-- animate number -->
<script>
const counters = document.querySelectorAll('.value');
const speed = 100;
counters.forEach( counter => {
   const animate = () => {
      const value = +counter.getAttribute('akhi');
      const data = +counter.innerText;
      const time = value / speed;
     if(data < value) {
          counter.innerText = Math.ceil(data + time);
          setTimeout(animate, 1);
        }else{
          counter.innerText = value;
        }
   }
   animate();
});
</script>
  </body>
</html>