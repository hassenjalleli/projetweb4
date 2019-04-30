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
	if(f1.nom.value==""){
 alert('Vous devez saisir le nom du produit!');
   return false;
   }

   if(verif1(f1.nom.value)==false)
{         alert("Le champ doit etre composé de lettres et d'espaces !");
          return false;
   }
   if(f1.reference.value==""){
 alert('Vous devez saisir la reference du produit!');
   return false;
   }

   if(verif1(f1.reference.value)==false)
{         alert("La reference doit etre composé de lettres et d'espaces !");
          return false;
   }
     if(f1.categorie.value==""){
 alert('Vous devez saisir la categorie du produit!');
   return false;
   }

   if(verif1(f1.categorie.value)==false)
{         alert("La categorie doit etre composé de lettres et d'espaces !");
          return false;
   }
      if(f1.prix.value==""){
 alert('Vous devez saisir le prix!');
   return false;
   }
      if(isNaN(f1.prix.value))
{      alert("Le prix doit etre numerique!");
       return false;
   }
      if(f1.etat.value==""){
 alert('Vous devez saisir letat!');
   return false;
   }
      if(isNaN(f1.qunatite.value))
{      alert("La quantite doit etre numerique!");
       return false;
   }
}
