SELECT f.nomCat, f.nomTem, numInd
FROM
(
    SELECT p.nomCat, p.nomTem, idInd
    FROM
    (
        SELECT nomCat, nomTem, tema.idTem 
        FROM cat_tema 
            LEFT JOIN categoria ON cat_tema.idCat = categoria.idCat 
            LEFT JOIN tema ON cat_tema.idTem = tema.idTem 
    ) p
    LEFT JOIN tema_ind ON p.idTem = tema_ind.idTem
) f
LEFT JOIN indicador ON f.idInd = indicador.idInd
ORDER BY f.nomCat DESC, f.nomTem ASC, numInd ASC



