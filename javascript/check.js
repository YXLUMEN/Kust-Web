function checkPassword(){const rePasswordArea=document.getElementById("rePasswordReg");const passwordValue=document.getElementById("passwordReg").value;const rePasswordValue=document.getElementById("rePasswordReg").value;if(passwordValue.length<6||passwordValue.length>20){alert("密码长度应为6-20位")
document.getElementById("passwordReg").value="";rePasswordArea.value="";return false;}
if(passwordValue!==rePasswordValue){alert("输入的密码不一致");rePasswordArea.value="";return false;}
return true;}
function validateMail(){const email=document.getElementById("phone").value;const reg=/^[a-zA-Z0-9_-]+@[a-zA-Z0-9_-]+(\.[a-zA-Z0-9_-]+)+$/;if(reg.test(email))return true;alert("请输入正确的邮箱地址");return false;}
function checkStrong(){const password=document.getElementById("passwordReg").value;const pattern=/^(?=.*[A-Za-z])(?=.*\d)(?=.*[!@#$%^&*()_+\-={}|:"<>?,./;'`~\[\]\\])[A-Za-z\d!@#$%^&*()_+\-={}|:"<>?,./;`~'\[\]\\]{6,20}$/;if(pattern.test(password))return true;alert("密码强度较低");return false;}