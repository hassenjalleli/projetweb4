function verif1(ch)
{
var test=true;
	for (i = 0;i < ch.length ; ++i)
	{
		if((ch.charAt(i) < "a" || ch.charAt(i) > "z") && (ch.charAt(i) < "A" || ch.charAt(i) > "Z")&& ch.charAt(i)!=" ")
		{
			test=false;
		}
	}
   return test;
}

function verif(){
	if(f.id_article.value==""){
 alert('Vous devez saisir id darticle!');
   return false;
   }
   if(isNaN(f.id_article.value))
{      alert("L'id doit etre un nombre!");
       return false;
   }
if(f.type.value==""){
 alert('Vous devez saisir le type darticle!');
   return false;
   }
   if(verif1(f.type.value)==false)
{         alert("Le champ doit etre composé de lettres et d'espaces !");
          return false;
   }
}
