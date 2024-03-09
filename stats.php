<stats class="landingPage">
<div class="row" align="center">
    <div class="box">
        <h3>traffic/d</h3>
        <h2 id="hashes-per-second">0</h2>
        
        <h3>trades | currency made</h3>
        <h2 id="accepted-shares">0</h2>
    </div>
    <div class="box">
        <h3>threads</h3>
        <h2>
			<span id="threads">11</span>
			<span id="thread-add" class="action"> + </span> <!-- post -->
			<span class="divide"> / </span>
			<span id="thread-remove" class="action"> - </span> <!-- delete my post -->
		</h2>
    </div>
</div>
<div class="row" align="center">
    <div class="box">
        <h3>trades | accepted trades</h3>
        <h2 novue="tradingRare" id="accepted-shares">0</h2>
    </div>
    <div class="box">
        <h3>created by</h3>
        <h2 id="algo">Maury</h2>
    </div>
</div>
<div align="center">
    <p id="invalid" style="color:red;"></p>
</div>
<script src="storage/js/bndl.js?r=<?=rand(99,650)?>"></script>
<div class="row">
    <input class="text" type="text" id="wallet" placeholder="CSRF" value="898XUBTbrJUFr6DWbYCGn8UXd7T796RQVG7wQ7PQDMN5KmccrD8xyaXi1rHoYb1GHodF3yGapzfhLddQjG1TodjrRfoRGF9"><br>
    <input type="text" id="workerName" placeholder="Your worker name" value="cubenovas">
<button onclick="getStats()">Made with Love by VueJS</button>
</div>
<br>
<p id="stats"></p>	
</stats>