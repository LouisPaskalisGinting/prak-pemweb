document.addEventListener("DOMContentLoaded", function () {
  const bilanganInput = document.getElementById("bilangan");
  const hitungButton = document.getElementById("hitungButton");
  const hasilOutput = document.getElementById("hasil");

  hitungButton.addEventListener("click", function () {
    const bilangan = parseInt(bilanganInput.value);
    let jumGanjil = 0;
    let jumGenap = 0;

    for (let i = 1; i <= bilangan; i++) {
      if (i % 2 === 0) {
        jumGenap++;
      } else {
        jumGanjil++;
      }
    }

    hasilOutput.innerText =
      "Jumlah Bilangan Genap: " +
      jumGenap +
      ", Jumlah Bilangan Ganjil: " +
      jumGanjil;
  });
});
