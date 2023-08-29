# Team gear5

## Project Description

[Description](assignment.md)

---

## Trello Board

[gear5 Trello Board](https://trello.com/b/HF9T6NHr/gear5)

---

## Team Members

| Name | Role | 📸 | GitHub Link |
| --- | --- | :---: | --- |
| Saman Perfat | Team Leader | <img src="img//Saman_Petfat.png" width=20%> | [Saman Perfat](https://github.com/SamanPetfat) |
| Martin Alfredson | Team Member | <img src="img//Martin_Alfredson.png" width=20%> | [Martin Alfredson](https://github.com/maal2202)
| Pavel Kostyuk | Team Member | <img src="img//Pavel_Kostyuk.png" width=20%> | [Pavel Kostyuk](https://github.com/PavelKostyuk) |
| Fredrik Magnusson | Tech Lead | <img src="img//Fredrik_Magnusson.png" width=20%> | [Fredrik Magnusson](https://github.com/mindriddler) |
| Alex Roman | Junior Developer | <img src="img//Alex_Roman.png" width=20%> | [Alex Roman](https://github.com/AlexRoman777) |

---

## How to run the project

### Prerequisites

- [Docker](https://docs.docker.com/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)
- [Git](https://git-scm.com/downloads)

### Clone the repository

```bash
git clone https://github.com/SamanPetfat/gear5.git
```

### Run the project

```bash
cd gear5
docker-compose up -d
```
### View the project

Navigate to [http://localhost:8080](http://localhost:8080) in your browser to view the phpadmin interface.

Navigate to [http://localhost:8081](http://localhost:8000) in your browser to view the wordpress site.

### Stop the project

```bash
docker-compose down
```

---

## TODO

- [x] Create a Trello board
- [x] Create a GitHub repository
- [x] Create a README.md for the project
- [x] We need to decide on a framework, Wordpress or 'vanilla' PHP
- [x] Create the docker-compose file
- [x] Create the .env file (see example.env for reference)
- [x] Set up .gitignore file - So we don't commit unnecessary files
- [x] Get a Dev environment up and running
- [ ] Plan about firewall, user management, etc.
- [ ] Plan for backup and restore
- [ ] Plan for monitoring
- [ ] Plan for logging
- [ ] Plan for testing
- [ ] Plan for deployment
- [ ] PDF report
- [ ] Presentation

---
