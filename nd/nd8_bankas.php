
<!-- Bankas ver. 1
(Paprasčiausia banko aplikacijos versija)

Banką sudaro atskiri puslapiai:
Sąskaitų sąrašas su mygtuku “ištrinti” ir linku į “pridėti lėšų” ir “nuskaičiuoti lėšas” puslapius
Naujos sąskaitos sukūrimas (įvedami duomenys: vardas, pavardė, sąskaitos numeris, asmens kodas)
Puslapis “pridėti lėšas”. Turi matytis savininko vardas, pavardė sąskaitos likutis ir laukelis sumai įvesti
Puslapis “nuskaičiuoti lėšas”. Analogiškai prieš tai buvusiam punktui
Visi puslapis turi bendrą meniu su nuorodom

Nauja sąskaita sukuriama su pradine 0 suma, o lėšos pridedamos/nuimamos pagalbiniuose puslapiuose.
Sąskaitos, kurioje yra lėšų ištrinti neturi būti galima.
Sąskaitas saraše rūšiuoti pagal savininko pavardę.
Sąskaitoje likusi suma negali būti minusinė.
Asmens kodas turi būti unikalus. Negali būti dviejų vartotojų su tuo pačiu asmens kodu.
Duomenų bazė - JSON failas (arba serializuotas failas).
Informacijos keitimui naudoti POST metodą ir peradresavimą, kitais atvejais GET metodą.
Po kiekvienos įrašymo (trynimo) operacijos turi būti parodomas pranešimas apie operacijos rezultatus.
Sąskaitos numeris b puslapyje (naujos sąskaitos kūrimas) turi būti sugeneruojamas automatiškai ir html atvaizduojamas kaip readonly. 
Sąskaita turi atitikti IBAN formatą. Bankas lietuviškas.
Asmens kodas turi būti tikrinamas ar atitinka taisykles.
Vardas ir pavardė ilgesni nei 3 simboliai.
Tikrinimas tik BackEnd’e. FrontEnd’e tikrinimo nedarykite.
Papildomai galite padaryti prisijungimą prie banko jo darbuotojams, 
kad tik prisijungę vartotojai (banko darbuotojai) galėtų dirbti su aplikacija. 
Prisijungimo duomenis saugokite atskirame JSON faile. Slaptažodžius saugokite užkoduotus (hash).
 -->
