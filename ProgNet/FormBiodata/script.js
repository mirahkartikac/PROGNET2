document.getElementById("biodataForm").addEventListener("submit", function(event) {
    event.preventDefault();
    validateForm();
});


function validateForm() {
    const email = document.getElementById("email").value;
    const name = document.getElementById("name").value;
    const univ = document.getElementById("univ").value;
    const fakultas = document.getElementById("fakultas").value;
    const prodi = document.getElementById("prodi").value;
    const nim = document.getElementById("nim").value;
    const gender = document.getElementById("gender").value;
    const age = document.getElementById("age").value;
    const birthplace = document.getElementById("birthplace").value;
    const tglLahir = document.getElementById("tglLahir").value;
    var hobi = []
    var checkboxes = document.querySelectorAll('input[name="hobi[]"]:checked')
    for(var checkbox of checkboxes){
        hobi.push(checkbox.nextElementSibling.textContent);
    }
    var agama = document.querySelector('input[name="agama"]:checked').nextElementSibling.textContent;

    if (email === "" || name === "" || nim === "" || gender === "" || age === "" || birthplace === "" || tglLahir === "" || univ === "" || fakultas ===  "" || prodi === "" || hobi.length === 0 || agama === "") {
        displayMessage("Semua kolom harus diisi.");
    } else {
        displayMessage(`Email: ${email}<br>
        Nama: ${name}<br>
        Universitas: ${univ}<br>
        Fakultas: ${fakultas}<br>
        Prodi: ${prodi}<br>
        NIM: ${nim}<br>
        Jenis Kelamin: ${gender}<br>
        Umur: ${age} tahun<br>
        Tempat Lahir: ${birthplace}<br>
        Tanggal Lahir: ${tglLahir}<br>
        Hobi: ${hobi.join(", ")}<br>
        Agama: ${agama}<br>`
        );
    }
}

function displayMessage(message) {
    document.getElementById("result").innerHTML = message;
}