<?php
namespace jtl\Connector\Presta\Mapper;

class Image extends BaseMapper
{
    protected $pull = array(
        'id' => 'id',
        'foreignKey' => 'foreignKey',
        'filename' => 'filename',
        'relationType' => 'relationType',
        'remoteUrl' => 'remoteUrl',
        'sort' => 'sort'
    );
}
