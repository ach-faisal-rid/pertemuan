<div class="row mt-5" id="blokfilm" style="margin-left: 15px; margin-right: 15px;">
</div>
<div class="modal fade" role="dialog" id="modaldetail"> 
    <div class="modal-dialog" role="document"> 
        <div class="modal-content"> 
            <div class="modal-header btn-primary"> 
                <h5 class="modal-title">Detail Film</h5> 
            </div> 
            <div class="modal-body" id="blokdetail"></div> 
            <div class="modal-footer"> 
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button> 
            </div> 
        </div>
    </div> 
</div>
<script src="film2.js"></script>
<script>
    // console.log(datafilm);
    function ambildatafilm(){
        let hasil = "";
        let x;
        for(x in datafilm) {
            let cv = datafilm[x].Cover;
            let jd = datafilm[x].Judul;
            let dI = datafilm[x].durasI;
            let pemain = datafilm[x].pemain;
            let sinopsis = datafilm[x].sinopsis;
            let tahun = datafilm[x].tahun;
            let rating = datafilm[x].rating;
            hasil += "<img src=\"" + cv + "\" data-judul=\"" + jd + "\" data-durasi=\"" + dI + "\" data-pemain=\"" + pemain + "\" data-sinopsis=\"" + sinopsis + "\" data-tahun=\"" + tahun + "\" data-rating=\"" + rating + "\" class=\"col-md-2\" style=\"margin-bottom: 15px;\" onclick=\"tampildetail(this)\">";
        }
        $("#blokfilm").html(hasil);
    }
    function tampildetail(el) {
        // Ambil data film dari elemen HTML
        let Judul = $(el).data("judul");
        let durasI = $(el).data("durasi");

        // Ambil data pemain, sinopsis, tahun, dan rating
        let pemain = $(el).data("pemain");
        let sinopsis = $(el).data("sinopsis");
        let tahun = $(el).data("tahun");
        let rating = $(el).data("rating");

        // Tampilkan data film di modal
        $("#blokdetail").html(
            `<p style="font-size: 20px;"><b>Judul:</b><br>${Judul}</p>` +
            `<p style="font-size: 20px;"><b>DurasI:</b><br>${durasI}</p>` +
            `<p style="font-size: 20px;"><b>Pemain:</b><br>${pemain}</p>` +
            `<p style="font-size: 20px;"><b>Sinopsis:</b><br>${sinopsis}</p>` +
            `<p style="font-size: 20px;"><b>Tahun:</b><br>${tahun}</p>` +
            `<p style="font-size: 20px;"><b>Rating:</b><br>${rating}</p>`
        );

        // Tampilkan modal
        $("#modaldetail").modal("show");
    }

    ambildatafilm();
    $("#mnarron").addClass("active");
</script>