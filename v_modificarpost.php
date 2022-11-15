<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Page</title>
        <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900%display=swap');

                *
                {
                    font-family: 'Poppins', 'sans-serif';
                    box-sizing: border-box;
                    margin: 0;
                    padding: 0;

                }

                body{
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    min-height: 100vh;
                    background-image: url("patos2.png");
                    background-size: cover;
                }

                .box {
                    position: relative;
                    width: 380px;
                    height: 690px;
                    border-radius: 8px;
                    background: #1c1c1c;
                    overflow: hidden;
                }

                .box::before{
                    content: '';
                    position: absolute;
                    top: -50%;
                    left: -50%;
                    width: 380px;
                    height: 690px;
                    background: linear-gradient(0deg, transparent, #008f39, #008f39);
                    transform-origin: bottom right;
                    animation: animate 20s linear infinite;
                }

                .box::after{
                    content: '';
                    position: absolute;
                    top: -50%;
                    left: -50%;
                    width: 380px;
                    height: 690px;
                    background: linear-gradient(90deg, transparent, #008f39, #008f39);
                    transform-origin: bottom left;
                    animation: animate 20s linear infinite;
                    animation-delay: -3s;
                }

                @keyframes animate {
                    0%{
                        transform: rotate(0deg);
                    }
                    100%{
                        transform: rotate(360deg);
                    }
                }

                .form {
                    position: absolute;
                    inset: 2px;
                    border-radius: 8px;
                    background: #28292d;
                    z-index: 10;
                    padding: 50px 40px;
                    display: flex;
                    flex-direction: column;

                }
                .form h2 {
                    color: #008f39;
                    font-weight: 500;
                    text-align: center;
                    letter-spacing: 0,1em;

                }

                .inputBox{
                    position: relative;
                    width: 300px;
                    margin-top: 45px;

                }
                .inputBox input {
                    position: relative;
                    width: 100%;
                    padding: 10px 9px 10px;
                    background: transparent;
                    border: none;
                    outline: none;
                    color: #23242a;
                    font-size: 1em;
                    letter-spacing: 0.05em;
                    z-index: 10;
                }

                .inputBox span{
                    position: absolute;
                    left: 0;
                    padding: 10px 10px 10px;
                    font-size: 1em;
                    color: #8f8f8f;
                    pointer-events: none;
                    letter-spacing: 0.05em;
                    transition: 0.5s;
                }

                .inputBox input:valid ~ span, 
                .inputBox input:focus ~ span  {
                    color: #008f39;
                    transform: translateX(0px) translateY(-34px);
                    font-size: 0.75em;

                }

                .inputBox i {
                    position: absolute;
                    left: 0;
                    bottom: 0;
                    width: 100%;
                    height: 2px;
                    background: #008f39;
                    border-radius: 4px;
                    transition: 0.5s;
                    pointer-events: none;
                    z-index: 9;
                }

                .inputBox input:valid ~ i, 
                .inputBox input:focus ~ i {
                    height: 44px;

                }

                .links {
                    display: flex;
                    justify-content: space-between;

                }

                .links a {
                    font-size: 00.75em;
                    color: #8f8f8f;
                    text-decoration: none;
                }

                .links a:hover,
                .links a:nth-child(2)
                {
                    color: #008f39;

                }
                input[type='submit'] {
                    border: none;
                    outline: none;
                    background: #008f39;
                    padding: 11px 25px;
                    width: 100px;
                    margin-top: 10px;
                    border-radius: 4px;
                    font-weight: 600;
                    cursor: pointer;
                }

                input[type='submit']:active {
                    opacity: 0.8;
                }
                #confi{
                    color: white;
                    margin-top: 2px;
                }
                #nop{
                    display:none;
                }
        </style>
    </head>
    <body>
		<div class="box">
			<form class="form" action="c2_modificarpost.php" method="get"'>
					 <h2>Sign In</h2>
				<div class="inputBox">
                    <input type="text" required="required" name="title">
                    <span>Titulo</span>
                    <i></i>
                </div>
                <div class="inputBox" id="nop">
                    <input type="text" required="required" name="id" value="<?php echo $id ?>">
                    <span>id</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" required="required" name="brief">
                    <span>Resumen</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <textarea maxlength="400" type="text" required="required" name="content"></textarea>
                    <span>Contenido</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="text" required="required" name="image">
                    <span>imagen</span>
                    <i></i>
                </div>
                <input type="submit" value="Actualizar">
			</form>
		</div>    	
    </body>
</html>