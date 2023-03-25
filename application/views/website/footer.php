<div class="footer">
            <div class="copyright"> &copy; Patient Management Project </div>
            <div class="updateDate">
                <script>
                    document.write(new Date());
                </script>
            </div>
        </div>
 <!-- Swiper JS -->
 <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  const inputField = document.getElementById("age");
  
  inputField.addEventListener("input", function() {
    let value = parseInt(this.value);
    
    if (isNaN(value) || value < 1 || value > 110) {
      value = Math.min(Math.max(value, 1), 110);
      this.value = value;
    }
  });
</script>
<script>
  var swiper = new Swiper(".mySwiper", {
    cssMode: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
    },
    mousewheel: true,
    keyboard: true,
  });
</script>
<script>
  const inputWeight = document.getElementById("weight");
  
  inputWeight.addEventListener("input", function() {
    let value = this.value;
    if (value.length > 3) {
      value = value.slice(0, 3);
      this.value = value;
    }
  });
</script>
<script>
  const inputHeight = document.getElementById("ht");
  
  inputHeight.addEventListener("input", function() {
    let value = this.value;
    if (value.length > 3) {
      value = value.slice(0, 3);
      this.value = value;
    }
  });
</script>
</body>
</html>