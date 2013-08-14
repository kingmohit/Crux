window.document.onkeydown = function (e)
{
  if (e.keyCode == 27)
  {
  document.getElementById("bulb").setAttribute("src","./img/bulbon.gif");
					document.getElementById("span9").removeAttribute("style");
					document.getElementById("lightsoff").style.opacity="0";
					document.getElementById("lightsoff").style.zIndex="-1";
					}
}
function light()
{
if (document.getElementById("bulb").getAttribute("src")=="./img/bulbon.gif")
{
	document.getElementById("bulb").setAttribute("src","./img/bulboff.gif");
	document.getElementById("span9").style.position="absolute";
	document.getElementById("span9").style.left="10%";
	document.getElementById("span9").style.top="10%";
	document.getElementById("lightsoff").style.opacity="0.95";
	document.getElementById("lightsoff").style.zIndex="999";
					}
                 else
                    {
					document.getElementById("bulb").setAttribute("src","./img/bulbon.gif");
					document.getElementById("span9").removeAttribute("style");
					document.getElementById("lightsoff").style.opacity="0";
					document.getElementById("lightsoff").style.zIndex="-1";
}					
}