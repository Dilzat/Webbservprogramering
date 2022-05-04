# Webbservprogramering
Sammarbetar med Yunfei Liu
Miniprojekt: forum för fårskallar
Gör ett forum där användare kan diskutera programmering och andra dataämnen! Inloggade användare ska kunna skriva kommentarer, ställa nya frågor och besvara andras frågor. Utnyttja de tekniker du hittills har lärt dig om SQL och PHP!

För att komma igång kan du inspireras av ett relativt enkelt men någorlunda fungerande exempel (det finns tre användare med användarnamn/lösenord “holros”/”foo”, “manfol”/”bar” respektive “goskor”/”baz”) och tillhörande källkod (databasdesignen borde framgå av SQL-satserna som finns här och där i koden); exemplet använder sig av dolda formulär för att hantera sessioner, vilket inte är mönsterlösningen (du bör nog istället använda sessioner så som vi har gjort i tidigare övning). Ett forum är ju en ganska vanlig webbapplikation, så det finns gott om mer avancerade inspirationskällor (Dischord, Slack, StackOverflow osv.).

Du har viss frihet i utformandet och kan vara mer eller mindre ambitiös i din implementation. Lämplig databasdesign kan innehålla följande tabeller (förslag):
users (användarnamn, lösenord, namn, etc.)
topics (rubrik, användarnamn för den som öppnade diskussionsämnet, etc.)
posts (inlägg, tidpunkt, användarnamn för den som skrev inlägget, etc.)
Du kan lägga till annan funktionalitet efter smak och ambition: möjlighet att ladda upp profilfoto, möjlighet att registrera eller uppdatera användarkonton, etc. Se även betygskriterier nedan.

Vill du jobba tillsammans med en eller två kamrater? Inga problem, men var och en måste kunna redovisa all kod på egen hand. Om t.ex. en person skriver all PHP-kod medan den andre gör HTML och SQL så måste båda personerna var för sig förstå PHP-koden, HTML-koden och databasen, vilket bl.a. innebär att man ska kunna svara på frågor om vad den andre har gjort.

Låter detta inte tillräckligt spännande? Har du någon bättre idé som använder liknande tekniker (inloggning med PHP, länkade tabeller i en relationsdatabas, etc.)? Vill du kombinera detta med ditt gymnasiearbete? Prata med läraren!

Projektet kan verka omfattande, men det är egentligen inga nya tekniker som du behöver lära dig. Du kommer ganska långt genom att klippa och klistra från tidigare inlämningsuppgifter.

Bedömning:
För betyget G krävs en fungerande produkt (enstaka mindre buggar kan tolereras).
För betyget VG krävs även att produkten uppvisar någon form av originalitet och/eller ytterligare funktionalitet (Du ska med andra ord göra någon utvidgning av projektet baserat på egna idéer utöver det relativt enkla exemplet i länken ovan) samt att uppenbara buggar har åtgärdats. Exempel på ytterligare funktionalitet kan vara möjlighet att ”gilla” inlägg eller asynkron uppdatering av sidan med AJAX. Vidare bör du även ha vidtagit åtminstone någon åtgärd för att öka säkerheten, t.ex. lösenord som sparas med hashfunktion, formulärhantering med post-redirect-get eller skydd mot SQL-injektion.
Fokus ligger på backend i denna uppgift, så du behöver inte lägga jättemycket energi på CSS; webbsidan ska vara läsbar, men behöver inte vara ”snygg”.

Om du gör ett bra projekt så publicerar vi det gärna på www.avateknik.se som exempel för framtida kursomgångar (eller kanske rentav som ett riktigt forum för elever att ställa frågor om t.ex. programmering). Om detta av någon anledning skulle vara känsligt för dig så prata med läraren om hur detta ska kunna lösas.
