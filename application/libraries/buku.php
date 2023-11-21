<?php
class buku
{
	function total($pinjam, $tersedia, $rusak, $tidakKembali)
	{
		$total = $pinjam + $tersedia + $rusak + $tidakKembali;
		echo "Total Keseluruhan Buku : $total";
	}

	function tersedia($tersedia)
	{
		$total = $tersedia + 75;
		echo "Total Buku yang tersedia jika sudah dikembalikan sebanyak 75 buku : $total";
	}

	function destroy($pinjam, $tersedia, $rusak, $tidakKembali)
	{
		$total = $pinjam + $tersedia + $rusak + $tidakKembali;
		$buang = $rusak * 0.2;
		$akhir = $total - $buang;
		echo "Total buku keseluruhan jika terdapat 20% buku yang rusak : $akhir";
	}
}
?>
