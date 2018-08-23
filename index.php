<!DOCTYPE html>
<html>
<head>
	<title>Game</title>
	<link rel="stylesheet" type="text/css" href="gaje.css">
</head>
<body>

<div id="loadRandom"></div>
<?php for($i = 0; $i < 250; $i++) { ?>
<div class="enemy" id="enemy<?php echo $i; ?>"></div>
<?php } ?>

<input type="hidden" id="myPositionTop" value="0">
<input type="hidden" id="myPositionLeft" value="0">
<div class="enemy" id="my"></div>

<script src="embo.js"></script>
<script>
	function getPosition() {
		for(i = 0; i < 250; i++) {
			pilih("#enemy"+i).pengaya("top: "+pilih("#randomTop" + i).value+"px;left: " + pilih("#randomLeft" + i).value+"px")
		}
	}

	function random() {
		ambil("random.php", (res) => {
			pilih("#loadRandom").tulis(res)
			getPosition()
		})
	}

	function getMyPosition(opt) {
		if(opt == "top") {
			let top = pilih("#myPositionTop")
			return top
		}else {
			let left = pilih("#myPositionLeft")
			return left
		}
	}
	function tekanBawah() {
		let top = getMyPosition("top")
		let left = getMyPosition("left")
		let topValue = parseInt(top.value) + 30
		let leftValue = left.value

		pilih("#my").pengaya("top: "+topValue+"px;left: "+leftValue+"px")
		top.value = topValue
		left.value = leftValue
	}
	function tekanAtas() {
		let top = getMyPosition("top")
		let left = getMyPosition("left")
		let topValue = parseInt(top.value) - 30
		let leftValue = left.value

		pilih("#my").pengaya("top: "+topValue+"px;left: "+leftValue+"px")
		top.value = topValue
		left.value = leftValue
	}
	function tekanKanan() {
		let top = getMyPosition("top")
		let left = getMyPosition("left")
		let leftValue = parseInt(left.value) + 30
		let topValue = top.value
		
		pilih("#my").pengaya("top: "+topValue+"px;left: "+leftValue+"px")
		top.value = topValue
		left.value = leftValue
	}
	function tekanKiri() {
		let top = getMyPosition("top")
		let left = getMyPosition("left")
		let leftValue = parseInt(left.value) - 30
		let topValue = top.value

		pilih("#my").pengaya("top: "+topValue+"px;left: "+leftValue+"px")
		top.value = topValue
		left.value = leftValue
	}

	tekan("ArrowDown", () => {
		tekanBawah()
	})
	tekan("ArrowUp", () => {
		tekanAtas()
	})
	tekan("ArrowRight", () => {
		tekanKanan()
	})
	tekan("ArrowLeft", () => {
		tekanKiri()
	})

	random()

	setInterval(function() {
		random()
	}, 100)
	setInterval(function() {
		random()
	}, 200)
</script>
</body>
</html>
