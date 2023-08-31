## Plan för produktion


3-2-1 principen

3 kopior av data
2 olika media
1 offsite

loadbalancer
fail2ban    
ufw 
iptables

stänga av ssh password access och lägga in nycklarna till de person som behöver access till servern
stänga av root over ssh
skapa en användare som finns i sudo/wheel gruppen (Det är denna användaren som ska användas över ssh)

grafana/elk stack

ubuntu server (senaste LTS versionen)

skapa användare för mysql och wordpress

tjänster som ska köras på servern

mysql kör på en egen server
wordpress och phpmyadmin kör på en egen server men på samma maskin

backup av databasen ska ske varje natt och sparas i en cloud storage bucket (GCP)

backup verktyg

cron jobb för att autostarta tjänster vid omstart (wordpress, mysql, phpmyadmin)
cron jobb för att automatiskt installera säkherhetsuppdateringar som kör varje natt efter backup är gjord

SSL/TLS-certifikat: Om din server kommer att vara värd för webbtjänster som är tillgängliga externt, bör du ha ett SSL/TLS-certifikat för att säkra all trafik. Lösningar som Let's Encrypt erbjuder gratis certifikat.

Serverhärdning: Förutom de säkerhetsverktyg du nämnde, kan du överväga att härda din server ytterligare. Detta kan inkludera steg som att minska antalet öppna portar, avinstallera onödiga paket, och sätta upp chroot-miljöer där det är lämpligt.

Regelbunden uppdatering: Skapa ett schema eller automatisering för att regelbundet uppdatera serverns programvara och alla tjänster. Gamla versioner av mjukvara kan ha kända sårbarheter.

Övervakning: Implementera ett system som övervakar serverns tillstånd i realtid, inte bara med Grafana/ELK men kanske med något som Nagios eller Zabbix.

Katastrofberedskap: Ha en tydlig katastrofåterställningsplan. Vad gör du om servern kraschar, eller om det finns en säkerhetsöverträdelse?

Databassäkerhet: För MySQL, överväg att implementera tekniker som databaschifferering, användning av saltade hashar för lösenord och regelbunden granskning av databasbehörigheter.

Webbapplikationssäkerhet: Om du kör en webbapplikation, tänk på säkerhetsrisker som SQL-injektion, Cross Site Scripting (XSS) och Cross Site Request Forgery (CSRF). Överväg att använda säkerhetstillsatser som Web Application Firewalls (WAF) eller verktyg som ModSecurity.

wordpress security plugin - wordfence security 

## Detta är en väldigt ihopslängd plan
## Tänk inte att det är Emanuel som ska ha den här planen, utan att det är en plan för en kund eller kollega.
## Planen ska beskriva vad som ska göras, inte hur det ska göras.
## Planen ska beskriva varför det ska göras
## Planen ska beskriva när det ska göras
## Feel free att lägga till mer eller ändra i planen om du tycker att det behövs
