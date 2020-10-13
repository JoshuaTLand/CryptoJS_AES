<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" charset="utf-8" content="width=device-width" , initial-scale=1, shrink-to-fit=no">
    <title>CryptoJS - AES</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>


<body>

    <script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/crypto.js"></script>
	
	<script>
		
		function decryptSubmit(){
			
			var encryptionKey = document.getElementById("encryptionKey").value;
			var encryptedPassword = document.getElementById("decryptValue").value;
			
			document.getElementById("encryptedOutput").innerHTML = encryptedPassword;
			
			var decryptedData = CryptoJS.AES.decrypt(encryptedPassword, encryptionKey).toString(CryptoJS.enc.Utf8)
			document.getElementById("decryptedOutput").innerHTML = decryptedData;
			
		}
		
		function encryptSubmit(){
			
			var encryptionKey = document.getElementById("encryptionKey").value;
			var encryptData = document.getElementById("decryptValue").value;
			
			document.getElementById("decryptedOutput").innerHTML = encryptData;
			
			var decryptedData = CryptoJS.AES.encrypt(encryptData, encryptionKey)
			document.getElementById("decryptedOutput").innerHTML = decryptedData;
			
		}
		
		window.onload = function(){
			document.getElementById("decryptButton").addEventListener("click", decryptSubmit);
			document.getElementById("encryptButton").addEventListener("click", encryptSubmit);
		}
	</script>

    <div class="container-fluid">
        <div class="row">
            <div class="col text-center p-5">
                <h1><a href="accounts.joshua" class="titleLink">CryptoJS - AES Quick Encrypt/Decrypt</a></h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-auto px-5 mx-auto">
				
				<div class="row text-center">
						
					<div class="col-sm-auto p-4 mx-auto">
						<h4>
							Enter Key
						</h4>
						<input id="encryptionKey" placeholder="Enter Key" class="input" type="password" />
					</div>		
					
                </div>
					
				<div class="row text-center">	
					
					<div class="col-sm-auto p-4 mx-auto">
						<h4>
							Enter Value
						</h4>
						<input id="decryptValue" placeholder="Value" class="input" />
						<br />
						<br />
						<input id="encryptButton" value="Encrypt" type="button" class="btn btn-secondary" />
						<input id="decryptButton" value="Decrypt" type="button" class="btn btn-secondary" />
					</div>			
					
                </div>
				
				<div class="row text-center">
						
					<div class="col-sm-auto p-4 mx-auto">
						<h4>Encrypted Value</h4>
						<br />
						<p id="encryptedOutput"></p>
						<br />
						<br />
						<br />
						<h4>Decrypted Value</h4>
						<br />
						<p id="decryptedOutput"></p>
					</div>				
                </div>
				
            </div>
        </div>
    </div>

</body>
</html>