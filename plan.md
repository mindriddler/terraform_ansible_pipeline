## Plan för produktion


3-2-1 principen

3 kopior av data
2 olika media
1 offsite

Skriva ett enkelt bash som ligger som ett cron jobb och kollar jämtemot github api för att se om ändrignar skett under de senaste X timmarna
loadbalancer
fail2ban    
ufw 
iptables

ingen ssh

grafana/elk stack

ubuntu server

skapa användare för mysql och apache

backup verktyg

cron jobb för att autostarta tjänster vid omstart
cron jobb vid midnatt för att ta backup
cron jobb för att automatiskt installera säkherhetsuppdateringar

SSL/TLS-certifikat: Om din server kommer att vara värd för webbtjänster som är tillgängliga externt, bör du ha ett SSL/TLS-certifikat för att säkra all trafik. Lösningar som Let's Encrypt erbjuder gratis certifikat.

Serverhärdning: Förutom de säkerhetsverktyg du nämnde, kan du överväga att härda din server ytterligare. Detta kan inkludera steg som att minska antalet öppna portar, avinstallera onödiga paket, och sätta upp chroot-miljöer där det är lämpligt.

Regelbunden uppdatering: Skapa ett schema eller automatisering för att regelbundet uppdatera serverns programvara och alla tjänster. Gamla versioner av mjukvara kan ha kända sårbarheter.

Övervakning: Implementera ett system som övervakar serverns tillstånd i realtid, inte bara med Grafana/ELK men kanske med något som Nagios eller Zabbix.

Penetrationstestning: Överväg att periodvis genomföra penetrationstestning för att identifiera potentiella sårbarheter i ditt system.

Katastrofberedskap: Ha en tydlig katastrofåterställningsplan. Vad gör du om servern kraschar, eller om det finns en säkerhetsöverträdelse?

Databassäkerhet: För MySQL, överväg att implementera tekniker som databaschifferering, användning av saltade hashar för lösenord och regelbunden granskning av databasbehörigheter.

Webbapplikationssäkerhet: Om du kör en webbapplikation, tänk på säkerhetsrisker som SQL-injektion, Cross Site Scripting (XSS) och Cross Site Request Forgery (CSRF). Överväg att använda säkerhetstillsatser som Web Application Firewalls (WAF) eller verktyg som ModSecurity.

API-säkerhet: Om du interagerar med externa API:er, inklusive GitHub, tänk på hur du lagrar och hanterar autentiseringsuppgifter. Se till att nycklar eller tokens är säkert lagrade och inte hårdkodade i skript eller källkod.

Kontroll av konfigurationsfiler: Tänk på att använda verktyg som etckeeper för att spåra och versionskontrollera ändringar i konfigurationsfiler.

MFA (Multi-Factor Authentication): För tjänster som stöder det, använd MFA för att öka säkerheten vid inloggning.