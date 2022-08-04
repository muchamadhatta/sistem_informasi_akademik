<!-- Footer -->
<footer class="footer overlay section">
	<!-- Footer Bottom -->
		<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="bottom-head">
								<div class="row">
									<div class="col-12">
								
								</div>
							</div>
						</div>
					</div>
				</div>
	<!--/ End Footer Bottom -->
</footer>
<!--/ End Footer -->

<!-- Jquery JS-->
<script src="<?= base_url('assets/frontend/') ?>js/jquery-migrate.min.js"></script>
<!-- Popper JS-->
<script src="<?= base_url('assets/frontend/') ?>js/popper.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?= base_url('assets/frontend/') ?>js/bootstrap.min.js"></script>
<!-- Colors JS-->
<script src="<?= base_url('assets/frontend/') ?>js/colors.js"></script>
<!-- Jquery Steller JS -->
<script src="<?= base_url('assets/frontend/') ?>js/jquery.stellar.min.js"></script>
<!-- Particle JS -->
<script src="<?= base_url('assets/frontend/') ?>js/particles.min.js"></script>
<!-- Fancy Box JS-->
<script src="<?= base_url('assets/frontend/') ?>js/facnybox.min.js"></script>
<!-- Magnific Popup JS-->
<script src="<?= base_url('assets/frontend/') ?>js/jquery.magnific-popup.min.js"></script>
<!-- Masonry JS-->
<script src="<?= base_url('assets/frontend/') ?>js/masonry.pkgd.min.js"></script>
<!-- Circle Progress JS -->
<script src="<?= base_url('assets/frontend/') ?>js/circle-progress.min.js"></script>
<!-- Owl Carousel JS-->
<script src="<?= base_url('assets/frontend/') ?>js/owl.carousel.min.js"></script>
<!-- Waypoints JS-->
<script src="<?= base_url('assets/frontend/') ?>js/waypoints.min.js"></script>
<!-- Slick Nav JS-->
<script src="<?= base_url('assets/frontend/') ?>js/slicknav.min.js"></script>
<!-- Counter Up JS -->
<script src="<?= base_url('assets/frontend/') ?>js/jquery.counterup.min.js"></script>
<!-- Easing JS-->
<script src="<?= base_url('assets/frontend/') ?>js/easing.min.js"></script>
<!-- Wow Min JS-->
<script src="<?= base_url('assets/frontend/') ?>js/wow.min.js"></script>
<!-- Scroll Up JS-->
<script src="<?= base_url('assets/frontend/') ?>js/jquery.scrollUp.min.js"></script>
<!-- Main JS-->
<script src="<?= base_url('assets/frontend/') ?>js/main.js"></script>

<!-- disable right click -->
<!-- <script>
	document.addEventListener("contextmenu", function(e){
    e.preventDefault();
  }, false);
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){alert('Access Denied!!')});

</script> -->
</body>
</html>