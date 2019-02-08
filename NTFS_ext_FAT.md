<table style="border-collapse: collapse; width: 100%">
        <tr><td colspan="2" style="border-color: black; border-style: solid; border-width: 1px">Sistemas de archivos</td><td style="border-color: black; border-style: solid; border-width: 1px">Tamaño max. Volumen</td><td style="border-color: black; border-style: solid; border-width: 1px">Tamaño max. nombre archivo</td><td style="border-color: black; border-style: solid; border-width: 1px">Max. archivos</td><td style="border-color: black; border-style: solid; border-width: 1px">Max. dimension archivo</td><td style="border-color: black; border-style: solid; border-width: 1px">Soporte</td></tr>
        <tr><td colspan="2" style="border-color: black; border-style: solid; border-width: 1px">NTFS</td><td>256 TiB con la actual implementación (16 EiB según su arquitectura)</td><td>255 caracteres</td><td>4.294.967.295 (2<sup>32</sup>–1)</td><td>16 TiB con la actual implementación (16 EiB según su arquitectura)</td><td>Familia Windows NT (Windows NT 3.1 a Windows NT 4.0, Windows 2000, Windows XP, Windows Server 2003, Windows Vista, Windows Server 2008, Windows 7, Windows 8, Windows 8.1, Windows Server 2008 R2, Windows 10), Mac OS X, Linux</td></tr>
     <tr><td style="border-color: black; border-width: 1px; border-top-style: solid; border-left-style: solid">ext</td><td style="border-color: black; border-width: 1px; border-top-style: solid; border-right-style: solid">ext</td><td></td><td>255 characteres</td><td></td><td></td><td>Linux</td></tr>
        <tr><td style="border-color: black; border-width: 1px; border-left-style: solid"></td><td style="border-color: black; border-width: 1px; border-right-style: solid">ext2</td><td>16 TiB</td><td>255 caracteres</td><td>10<sup>18</sup></td><td>2 TiB</td><td>Linux, BSD, Windows (mediante IFS), Mac OS X, AmayaOS</td></tr>
     <tr><td style="border-color: black; border-width: 1px; border-left-style: solid"></td><td style="border-color: black; border-width: 1px; border-right-style: solid">ext3</td><td>4TB a 32TB</td><td>255 bytes</td><td>2<sup>32</sup></td><td>16 GB a 2 TB</td><td>Linux, BSD, Windows (a través de IFS)</td></tr>
        <tr><td style="border-color: black; border-width: 1px; border-bottom-style: solid; border-left-style: solid"></td><td style="border-color: black; border-width: 1px; border-right-style: solid; border-bottom-style: solid">ext4</td><td>1024 PiB</td><td>256 bytes</td><td>4x10<sup>9</sup></td><td>16 TB</td><td>Linux</td></tr>
        <tr><td rowspan="3" style="border-color: black; border-width: 1px; border-top-style: solid; border-bottom-style: solid; border-left-style: solid">FAT</td><td style="border-color: black; border-width: 1px; border-right-style: solid">FAT12</td><td>32 MiB</td><td rowspan="3">8.3 (11) o 255 caracteres cuando se usan LFNs (Long File Names)</td><td>4.068 para clústers de 8 KiB</td><td>32 MiB</td><td>MS-DOS, MS-DOS 2.0, MS-DOS 3.0</td></tr>
        <tr><td style="border-color: black; border-width: 1px; border-right-style: solid">FAT16</td><td>2 GiB (4 GiB en Windows NT)</td><td>65.460 para clústers de 32 KiB</td><td>2 GiB</td><td>MS-DOS 4.0, Windows NT, Windows 98 (solo lectura y escritura en disco)</td></tr>
        <tr><td style="border-color: black; border-width: 1px; border-bottom-style: solid; border-right-style: solid">FAT32</td><td>10 TiB</td><td>268.173.300 para clústers de 32 KiB</td><td>4 GiB - 1</td><td>Windows 95 OSR2, Windows 98, Windows 2000</td></tr>
    </table>



NTFS
New Technology File System es un sistema de archivos de Windows NT, esta basado en el sistema de archivos HPFS de IBM/Microsoft usado en el sistema operativo OS/2, y también tiene ciertas influencias del formato de archivos HFS diseñado por Apple.
NTFS permite definir el tamaño del clúster a partir de 512 bytes (tamaño mínimo de un sector) de forma independiente al tamaño de la partición.
Es un sistema adecuado para las particiones de gran tamaño requeridas en estaciones de trabajo de alto rendimiento y servidores. Puede manejar volúmenes de, teóricamente, hasta 2<sup>64</sup>–1 clústeres. En la práctica, el máximo volumen NTFS soportado es de 2<sup>32</sup>–1 clústeres (aproximadamente 16 TiB usando clústeres de 4 KiB).
Su principal inconveniente es que necesita para sí mismo una gran cantidad de espacio en disco duro, por lo que no es recomendable su uso en discos con menos de 400 MiB libres

ext
Extended file sistem, el sistema de archivos extendido , fue el primer sistema de archivos creado específicamente para el sistema operativo Linux.
Fue reemplazado tanto por ext2, second extended filesystem, el cual fue el sistema de ficheros por defecto de las distribuciones de Linux Red Hat Linux, Fedora Core y Debian. La principal desventaja de ext2 es que no implementa el registro por diario (en inglés Journaling) que sí poseen sus posteriores versiones ext3 y ext4.
Third extended filesystem, ext3, es un sistema de archivos con registro por diario (journaling) el cual fue el más usado en distribuciones Linux, aunque en la actualidad ha sido remplazado por su sucesor, ext4.
Fourth extended filesystem, ext4, El sistema de archivos ext4 es capaz de trabajar con volúmenes de gran tamaño, hasta 1 exbibyte y ficheros de tamaño de hasta 16 TiB.
Las principales mejoras son que introduce son:

+ Soporte de volúmenes de hasta 1024 PiB.
+ Soporte añadido de extent.
+ Menor uso del CPU.
+ Mejoras en la velocidad de lectura y escritura.

FAT
File Allocation Table es un sistema de archivo principal para varios sistemas operativos, la mayoría DOS, incluyendo DR-DOS, OpenDOS, freeDOS, MS-DOS, Microsoft Windows (incluyendo Windows Me). FAT también es utilizado para dispositivos extraíbles y tarjetas de memoria.
NTFS tiene varias mejoras sobre FAT como soporte mejorado para los metadatos y el uso de estructuras de datos avanzadas para la confiabilidad, y la utilización del espacio en disco, además de las extensiones adicionales como listas de control de acceso de seguridad y el diario del sistema de archivos. Las implementaciones más extendidas de FAT tienen algunas desventajas. Cuando se borran y se escriben nuevos archivos tiende a dejar fragmentos dispersos de éstos por todo el soporte. Con el tiempo, esto hace que el proceso de lectura o escritura sea cada vez más lento.



Los archivos de configuración de Debian/Linux estan en su gran mayoria en el directorio `/etc`