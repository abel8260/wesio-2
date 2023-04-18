<?php
$path = "../../COIN/WES/ppcxi/txtv/contratos-com-comprovante";
$diretorio = dir($path);
echo "<style>";

echo "</style>";

echo "<a style='border: 1px solid black; background-color: #ccc; color: black ; text-decoration:none;  ' href='#'>AREA DE MEMBROS  --ESTEJA DISTANTE</a>";
echo "<br/> <hr/> <br/><a style='border: 8px solid black; background-color: black; color: white; border-radius: 25%; text-decoration:none;  ' href='../../../redeWESIO29/ADMIN/WESIOREDE/about.php'>Home</a>";

echo "<hr/>";
echo "<hr/>";

echo "  <p style='border: 1px solid black; align: left; '><br/><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-archive-fill' viewBox='0 0 16 16'>
  <path d='M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z'/>
</svg>  <strong> Lista de contratos feitos :</strong><br/></p><hr/>";
while($arquivo = $diretorio -> read()){
echo "==v <p style='border: 1px solid black; align: left; '><br/><svg xmlns='http://www.w3.org/2000/svg/' width=16' height='16' fill='currentColor' class='bi bi-file-binary-fill' viewBox='0 0 16 16'> <path d='M5.526 9.273c-.542 0-.832.563-.832 1.612 0 .088.003.173.006.252l1.56-1.143c-.126-.474-.375-.72-.733-.72zm-.732 2.508c.126.472.372.718.732.718.54 0 .83-.563.83-1.614 0-.085-.003-.17-.006-.25l-1.556 1.146z'/> <path d='M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM7.05 10.885c0 1.415-.548 2.206-1.524 2.206C4.548 13.09 4 12.3 4 10.885c0-1.412.548-2.203 1.526-2.203.976 0 1.524.79 1.524 2.203zm3.805 1.52V13h-3v-.595h1.181V9.5h-.05l-1.136.747v-.688l1.19-.786h.69v3.633h1.125z'/></svg><a style=' text-decoration:none; color:black;' href='".$path.$arquivo."'>".$arquivo."</a></p>";
}
$diretorio -> close();
?>
<?php
$path = "../../COIN/WES/ppcxi/datv";
$diretorio = dir($path);
echo "<hr/>";
echo "<hr/>";
echo "<style>";

echo "</style>";
echo "  <p style='border: 1px solid black; align: left; '><br/><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-archive-fill' viewBox='0 0 16 16'>
  <path d='M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z'/>
</svg>  <strong> Lista de contratos nao feitos  ou agilizados sem  marca :</strong><br/></p><hr/>";
while($arquivo = $diretorio -> read()){
echo "==v <p style='border: 1px solid black; align: left; '><br/><svg xmlns='http://www.w3.org/2000/svg/' width=16' height='16' fill='currentColor' class='bi bi-file-binary-fill' viewBox='0 0 16 16'> <path d='M5.526 9.273c-.542 0-.832.563-.832 1.612 0 .088.003.173.006.252l1.56-1.143c-.126-.474-.375-.72-.733-.72zm-.732 2.508c.126.472.372.718.732.718.54 0 .83-.563.83-1.614 0-.085-.003-.17-.006-.25l-1.556 1.146z'/> <path d='M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM7.05 10.885c0 1.415-.548 2.206-1.524 2.206C4.548 13.09 4 12.3 4 10.885c0-1.412.548-2.203 1.526-2.203.976 0 1.524.79 1.524 2.203zm3.805 1.52V13h-3v-.595h1.181V9.5h-.05l-1.136.747v-.688l1.19-.786h.69v3.633h1.125z'/></svg><a style=' text-decoration:none; color:black;' href='".$path.$arquivo."'>".$arquivo."</a></p>";
}
$diretorio -> close();
?>
