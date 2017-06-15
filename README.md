DED PROTOTYPE 1.0 “XRAY”
Auteur: 		Sjors Verhoef
Groep:			RASE
Link prototype:	http://i335404.iris.fhict.nl/ded/
Link concept		https://docs.google.com/document/d/1zfk9yFywkWEH-aH3GkvAa24iiG0x8qVLTzxKPlrmTB8/edit?usp=sharing

Globale beschrijving:
Dit prototype dient als een houvast voor verdere uitwerking in het technische gedeelte van het “The future is made by the heroes of today” concept. Het doel van dit prototype is een basis te leggen tussen de output van data uit sensoren en deze te vervormen naar een visualisatie. 

Library:
Veel javascript wordt geladen vanuit de zogenaamde “Module” Library. Deze is zelf gemaakt speciaal voor de toepassing op dit project. De meeste functies werken in combinatie met het HTML canvas. Deze functie kan aangeroepen worden als:

Module.functie(parameter);

Functies:
hexToRgb:
input - Module.hexToRgb(#111111)	(hex kleurcode)
output – rgb(“r111, g111, b111”);		(RGB kleurcode)

bmiToSize:
input – Module.bmiToSize(11)		(BMI getal)
output – “34”					(Vergroting BMI bruikbaar in HTML canvas)

emotion:
input – Module.emotion(1)			(Parameter 1/0 happy/sad)
output - var answer = ctx.arc(75…		(Code bruikbaar in HTML canvas)

eyecolor:
input – Module.eyecolor(1)			(Parameter 1/0 happy/sad)
output - var answer = ctx.arc(75…		(Code bruikbaar in HTML canvas)

bmiToPicture:
input- Module.bmiToPicture(1)		(BMI getal)
output – “http://link.nl			(Goede link op basis van BMI getal)

Toevoegingen:
Toevoegingen aan de library kunnen als volgt toegevoegd worden:

Bestaande functie
},
functienaam: function (parameters){ functie return parameters}
};
})();
