echo “Limpando Cache e Swap…”
sudo -i

echo 3 > /proc/sys/vm/drop_caches
sysctl -w vm.drop_caches=3
swapoff -a && swapon -a
 sync; echo 1 > /proc/sys/vm/drop_caches
 sync; echo 3 > /proc/sys/vm/drop_caches
echo “Limpeza do Cache e Swap efetuada com sucesso”