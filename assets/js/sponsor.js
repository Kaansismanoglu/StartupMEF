function kategori(ID) {
    
    if(ID == "HEPSİ"){
    var secilenID = document.getElementById("ANASPONSOR");
    var secilenID2 = document.getElementById("MEDYASPONSOR");
    var secilenID3 = document.getElementById("İŞBİRLİKLERİ");
    
        if (secilenID.style.display == "none" || secilenID2.style.display == "none" || secilenID3.style.display == "none") {
            secilenID.style.display = "";
            secilenID2.style.display = "";
            secilenID3.style.display = "";
        }
    }



    if(ID == "ANASPONSOR"){
        var secilenID = document.getElementById("İŞBİRLİKLERİ");
        var secilenID2 = document.getElementById("MEDYASPONSOR");
        var secilenID3 = document.getElementById("ANASPONSOR");

            if(secilenID.style.display == "none" || secilenID2.style.display == "none" || secilenID3.style.display == "none" || secilenID.style.display == "" || secilenID2.style.display == ""){
            
                secilenID.style.display = "";
                secilenID2.style.display = "";
                secilenID3.style.display = "";

            if (secilenID.style.display == "none" && secilenID2.style.display == "none") {
                secilenID.style.display = "";
                secilenID2.style.display = "";
            } else {
                secilenID.style.display = "none";
                secilenID2.style.display = "none";
            }
        }
            
        }



        if(ID == "MEDYASPONSOR"){
            var secilenID = document.getElementById("ANASPONSOR");
            var secilenID2 = document.getElementById("İŞBİRLİKLERİ");
            var secilenID3 = document.getElementById("MEDYASPONSOR");

            if(secilenID.style.display == "none" || secilenID2.style.display == "none" || secilenID3.style.display == "none" || secilenID.style.display == "" || secilenID2.style.display == ""){
            
                secilenID.style.display = "";
                secilenID2.style.display = "";
                secilenID3.style.display = "";

                if (secilenID.style.display == "none" && secilenID2.style.display == "none" ) {
                    secilenID.style.display = "";
                    secilenID2.style.display = "";
                } else {
                    secilenID.style.display = "none";
                    secilenID2.style.display = "none";
                }
            }
           
        }
        
            
            if(ID == "İŞBİRLİKLERİ"){
                var secilenID = document.getElementById("ANASPONSOR");
                var secilenID2 = document.getElementById("MEDYASPONSOR");
                var secilenID3 = document.getElementById("İŞBİRLİKLERİ");

                if(secilenID.style.display == "none" || secilenID2.style.display == "none" || secilenID3.style.display == "none" || secilenID.style.display == "" || secilenID2.style.display == ""){
            
                    secilenID.style.display = "";
                    secilenID2.style.display = "";
                    secilenID3.style.display = "";

                        if (secilenID.style.display == "none" && secilenID2.style.display == "none") {
                            secilenID.style.display = "";
                            secilenID2.style.display = "";
                        } else {
                            secilenID.style.display = "none";
                            secilenID2.style.display = "none";
                        }
                    }
                    
                }   


}



/*------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------*/

