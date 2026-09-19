class Film:
    def __init__(self, idFilm, Judul, Genre, Durasi, TahunRilis):
        self.__idFilm = str(idFilm)
        self.__Judul = str(Judul)
        self.__Genre = str(Genre)
        self.__Durasi = int(Durasi)
        self.__TahunRilis = int(TahunRilis)
    
    # Getter for all atribute
    def getIdFilm(self) -> str:
        return self.__idFilm
    def getJudul(self) -> str:
        return self.__Judul
    def getGenre(self) -> str:
        return self.__Genre
    def getDurasi(self) -> int:
        return self.__Durasi
    def getTahunRilis(self) -> int:
        return self.__TahunRilis
  
    # Setter for all atribute
    def setIdFilm(self, idFilm:str) -> None:
        self.__idFilm = str(idFilm)
    def setJudul(self, Judul:str) -> None:
        self.__Judul = str(Judul)
    def setGenre(self, Genre:str) -> None:
        self.__Genre = str(Genre)
    def setDurasi(self, Durasi:int) -> None:
        self.__Durasi = int(Durasi)
    def setTahunRilis(self, TahunRilis:int) -> None:
        self.__TahunRilis = int(TahunRilis)
   
