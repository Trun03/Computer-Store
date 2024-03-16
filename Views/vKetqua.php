<style type="text/css">
.modal {
  display: block;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.5);
}


.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 5px;
  border: 1px solid #090;
  width: 30%;
  font-family:Arial, Helvetica, sans-serif;
}
.modal-content p:nth-child(1) { 
			margin: 0px; height:25px;  background:#666; 
			padding-top:5px; padding-left:10px; color:white; 
			font-weight:bold; text-transform:uppercase; text-align:center;}
.modal-content p:nth-child(2) { color:black; text-align:center; margin:10px}
.modal-content p:nth-child(3) { text-align:right; margin:0px}
.modal-content a{color:#090; text-decoration:none; font-size:12px;padding-right:10px}
</style>
<div id="myModal" class="modal">

  <div class="modal-content">
    <p> 
    <span class="title">ALERT</span>
    </p>
    <p><?=$thongbao?></p>
    <p><a href="<?=$link_tieptuc?>">Continue</a></p>
  </div>
</div>
<script>

var modal = document.getElementById("myModal");

window.onclick = function(event) {
  if (event.target == modal) { 
    
  }
}
</script>