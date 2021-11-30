
   <footer class="main-footer">
      <div class="container flex-container">
         <div class="footer-header flex-container">
            <div class="copyright">
               <h2>Margalapis UAB.</h2>
               <?php
									function metai()
									{
										 $k_metai = 2021; // Puslapio sukūrimo metai
										 $d_metai = date('Y'); // Dabartiniai metai
										 if ($d_metai > $k_metai) {
												echo $k_metai . '—' . $d_metai;
										 } else {
												echo $k_metai;
										 }
									}
								?>
               <p>© <?php metai() ?> Margalapis. Visos teisės saugomos.</p>
               <p>Sumanyta Robirurk’o bei Albuck’o.</p>
            </div>
            <div class="contactus">
               <p><a href="mailto:labas@margalapis.lt"><i class="pe-7s-mail"></i> labas@margalapis.lt</a></p>
               <p><a href="tel:+37012345678"><i class="pe-7s-call"></i> +370 12345678</a></p>
            </div>
         </div>
         <div class="footer-links flex-container">
            <div>
               <ul>
                  <li><a href="#apie">Apie mus</a></li>
                  <li><a href="#darbai">Mūsų darbai</a></li>
                  <li><a href="#atsiliepimai">Atsiliepimai</a></li>
                  <li><a href="#paslaugos">Paslaugos</a></li>
               </ul>
               <!-- <ul>
                  <li><a href="#">Naujienos</a></li>
                  <li><a href="#">Teisės</a></li>
               </ul> -->
            </div>
            <div>
               <ul>
                  <li><a href="https://www.facebook.com/">Facebook</a></li>
                  <li><a href="https://twitter.com/">Twitter</a></li>
                  <li><a href="https://www.instagram.com/">Instagram</a></li>
                  <li><a href="https://www.youtube.com/">Youtube</a></li>
               </ul>
            </div>
         </div>
      </div>
   </footer>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="../app/js/mobmenu.js"></script>
   <script src="../app/js/pbanimate.js"></script>
   <script src="../app/js/testimon.js"></script>
   <script src="../app/js/workshow.js"></script>
</body>
</html>
