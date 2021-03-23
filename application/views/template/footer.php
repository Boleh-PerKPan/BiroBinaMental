    <!--penutup div clas container pada header.php-->
    </div>
    </main>
    <footer>
        <div class="new-panel row" style="padding-left: 5rem; padding-top:1rem">
            <div class="col">
                <p style="font-size:13px"><b>Tentang Kami</b></p>
                <p>Alamat Kantor <br>Padang Pasir, Kec. Padang Barat, Kota Padang, Sumatera Barat </p>
                <p>Email : xxx@xmail.com <br>Fax : (0751) <br>Phone Numbers : (0751)</p>
            </div>
            <div class="col-6 offset-md-1">
                <p>col 2</p>
            </div>
            <div class="col" style="">
                <p style="font-size:13px"><b>Sites Link</b></p>
                <p>
                    <a href="http://sumbarprov.go.id/" style="color: white;"><i class="fas fa-chevron-right"></i> Situs Resmi Provinsi Sumbar</a> <br>
                    <a href="http://simaya.sumbarprov.go.id/" style="color: white;"><i class="fas fa-chevron-right"></i> Simaya Sumbar</a> <br>
                    <a href="http://egov.sumbarprov.go.id/" style="color: white;"><i class="fas fa-chevron-right"></i> Portal E-Government Sumbar</a> <br>
                </p>
            </div>
        </div>
        <div style="text-align: center; background-color: #454343;">&copy; 2021 Copyright<br>Support by Dinas Komunikasi dan Informatika Provinsi Sumatera Barat</div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>
        var mybutton = document.getElementById("upBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    </body>

    </html>