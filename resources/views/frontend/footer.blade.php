<div class="ft">
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-lg-3 col-md-5 col-sm-6">
                <h3 style="color: #cff6a9;">QUICK LINKS</h3>
                <ul class="ps" >
                    @foreach ($footer1 as $footer )
                    <li><a href="{{ $footer->link }}" target="_blank"><i class="fa-solid fa-angle-right" id="lc"></i> {{ $footer->name }} </a></li>
                    @endforeach
                </ul>

            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
                <ul id="ps" class="ps">
                    @foreach ($footer2 as $footer )
                    <li><a href="{{ $footer->link }}" target="_blank"><i class="fa-solid fa-angle-right" id="lc"></i> {{ $footer->name }} </a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <ul id="ps" class="ps">
                    @foreach ($footer3 as $footer )
                    <li><a href="{{ $footer->link }}" target="_blank"><i class="fa-solid fa-angle-right" id="lc"></i> {{ $footer->name }} </a></li>
                    @endforeach
                </ul><br><br>
            </div>
           <div class=" col-lg-2 col-md-4 col-sm-6">
                <h3 style="color: #cff6a9;">CONTACT INFO</h3>
                    <ul class="text-white ps mt-2" >
                        <p><i class="fa-solid fa-location-dot" id="lc"></i><a href="https://goo.gl/maps/hERRxVBrBb1uozYD9" target="_blank"> Kariyamanikam Road,<br>&emsp;Samayapuram,<br>&emsp;Trichy – 621112.</a></p>
                        <p><i class="fa-solid fa-phone" id="lc"></i> Phone: 0431 – 2670799</p>
                        <p><i class="fa-solid fa-envelope" id="lc"></i><a href="mailto:"> krct.trichy@gmail.com</a></p>
                        <br>
                        <div class="social">
                            <p><a href="#"><i class="fa-brands fa-square-twitter fa-2x"></i></a>&ensp;
                            <a href="#"><i class="fa-brands fa-square-facebook fa-2x"></i></a>&ensp;
                            <a href="#"><i class="fa-brands fa-instagram fa-2x"></i></a>&ensp;
                            <a href="#"><i class="fa-brands fa-linkedin fa-2x"></i></a></p>
                        </div>
                    </ul>
            </div>
            <div class="col-lg-2 col-md col-sm-6 mt-2">
            <ul>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3917.452736718423!2d78.73483281473517!3d10.929133192217959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf79e2e1239bf%3A0x17aa15a4930f40e2!2sK%20RAMAKRISHNAN%20COLLEGE%20OF%20TECHNOLOGY%20(KRCT)!5e0!3m2!1sen!2sin!4v1660915391245!5m2!1sen!2sin" width="200px" height="250px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </ul>
            </div>
        </div>
    </div><br>
    <div class="text-center text-white">
        <p>&copy;  Copyright {{date('Y')}} KRCT | All Rights Reserved. Developed and Maintained by CSE Batch (2020-2024)</p>
    </div><br>
</div>

</body>
</html>
