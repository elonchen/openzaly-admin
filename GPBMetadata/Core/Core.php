<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/core.proto

namespace GPBMetadata\Core;

class Core
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa7150a0f636f72652f636f72652e70726f746f1204636f726522270a09" .
            "4572726f72496e666f120c0a04636f6465180120012809120c0a04696e66" .
            "6f180220012809220e0a0c4e6f6e65526573706f6e736522a9010a145472" .
            "616e73706f72745061636b61676544617461121c0a036572721801200128" .
            "0b320f2e636f72652e4572726f72496e666f120c0a046461746118022001" .
            "280c12360a0668656164657218032003280b32262e636f72652e5472616e" .
            "73706f72745061636b616765446174612e486561646572456e7472791a2d" .
            "0a0b486561646572456e747279120b0a036b6579180120012805120d0a05" .
            "76616c75651802200128093a023801222f0a094d7367537461747573120e" .
            "0a066d73675f696418012001280912120a0a6d73675f7374617475731802" .
            "20012805220b0a094d736746696e69736822630a074d736754657874120e" .
            "0a066d73675f696418012001280912140a0c736974655f757365725f6964" .
            "18022001280912160a0e736974655f667269656e645f6964180320012809" .
            "120c0a047465787418042001280c120c0a0474696d651805200128032291" .
            "010a0d4d736753656372657454657874120e0a066d73675f696418012001" .
            "280912140a0c736974655f757365725f696418022001280912160a0e7369" .
            "74655f667269656e645f6964180320012809120c0a047465787418042001" .
            "280c120e0a0674735f6b657918052001280912160a0e736974655f646576" .
            "6963655f6964180620012809120c0a0474696d6518072001280322640a09" .
            "47726f757054657874120e0a066d73675f696418012001280912140a0c73" .
            "6974655f757365725f696418022001280912150a0d736974655f67726f75" .
            "705f6964180320012809120c0a047465787418042001280c120c0a047469" .
            "6d651805200128032292010a0f47726f757053656372657454657874120e" .
            "0a066d73675f696418012001280912140a0c736974655f757365725f6964" .
            "18022001280912150a0d736974655f67726f75705f696418032001280912" .
            "0c0a047465787418042001280c120e0a0674735f6b657918052001280912" .
            "160a0e736974655f6465766963655f6964180620012809120c0a0474696d" .
            "6518072001280322670a084d7367496d616765120e0a066d73675f696418" .
            "012001280912140a0c736974655f757365725f696418022001280912160a" .
            "0e736974655f667269656e645f6964180320012809120f0a07696d616765" .
            "4964180420012809120c0a0474696d651807200128032295010a0e4d7367" .
            "536563726574496d616765120e0a066d73675f696418012001280912140a" .
            "0c736974655f757365725f696418022001280912160a0e736974655f6672" .
            "69656e645f6964180320012809120f0a07696d6167654964180420012809" .
            "120e0a0674735f6b657918052001280912160a0e736974655f6465766963" .
            "655f6964180620012809120c0a0474696d6518072001280322680a0a4772" .
            "6f7570496d616765120e0a066d73675f696418012001280912140a0c7369" .
            "74655f757365725f696418022001280912150a0d736974655f67726f7570" .
            "5f6964180320012809120f0a07696d6167654964180420012809120c0a04" .
            "74696d651807200128032296010a1047726f7570536563726574496d6167" .
            "65120e0a066d73675f696418012001280912140a0c736974655f75736572" .
            "5f696418022001280912150a0d736974655f67726f75705f696418032001" .
            "2809120f0a07696d6167654964180420012809120e0a0674735f6b657918" .
            "052001280912160a0e736974655f6465766963655f696418062001280912" .
            "0c0a0474696d6518072001280322670a084d7367566f696365120e0a066d" .
            "73675f696418012001280912140a0c736974655f757365725f6964180220" .
            "01280912160a0e736974655f667269656e645f6964180320012809120f0a" .
            "07766f6963654964180420012809120c0a0474696d651807200128032295" .
            "010a0e4d7367536563726574566f696365120e0a066d73675f6964180120" .
            "01280912140a0c736974655f757365725f696418022001280912160a0e73" .
            "6974655f667269656e645f6964180320012809120f0a07766f6963644964" .
            "180420012809120e0a0674735f6b657918052001280912160a0e73697465" .
            "5f6465766963655f6964180620012809120c0a0474696d65180720012803" .
            "22680a0a47726f7570566f696365120e0a066d73675f6964180120012809" .
            "12140a0c736974655f757365725f696418022001280912150a0d73697465" .
            "5f67726f75705f6964180320012809120f0a07766f696365496418042001" .
            "2809120c0a0474696d651807200128032296010a1047726f757053656372" .
            "6574566f696365120e0a066d73675f696418012001280912140a0c736974" .
            "655f757365725f696418022001280912150a0d736974655f67726f75705f" .
            "6964180320012809120f0a07766f6963644964180420012809120e0a0674" .
            "735f6b657918052001280912160a0e736974655f6465766963655f696418" .
            "0620012809120c0a0474696d6518072001280322080a064d73674d617022" .
            "0e0a0c4d73675365637265744d6170220a0a0847726f75704d617022100a" .
            "0e47726f75705365637265744d617022570a0b55324d73674e6f74696365" .
            "12140a0c736974655f757365725f696418012001280912160a0e73697465" .
            "5f667269656e645f6964180220012809120c0a047465787418032001280c" .
            "120c0a0474696d6518042001280322590a0e47726f75704d73674e6f7469" .
            "636512140a0c736974655f757365725f696418012001280912150a0d7369" .
            "74655f67726f75705f6964180220012809120c0a04746578741803200128" .
            "0c120c0a0474696d651804200128032ae0010a094865616465724b657912" .
            "190a15434c49454e545f534f434b45545f56455253494f4e100012210a1d" .
            "434c49454e545f534f434b45545f534954455f53455353494f4e5f494410" .
            "0112250a21434c49454e545f534f434b45545f504c4154464f524d5f5345" .
            "5353494f4e5f49441002121b0a17434c49454e545f534f434b45545f4445" .
            "564943455f49441003121a0a16434c49454e545f534f434b45545f4c414e" .
            "47554147451004121b0a16434c49454e545f524551554553545f52454645" .
            "52455210f50312180a13534954455f5345525645525f56455253494f4e10" .
            "e9072ae2020a074d736754797065120a0a064e4f544943451000120e0a0a" .
            "4d53475f5354415455531001120e0a0a4d53475f46494e49534810021208" .
            "0a04544558541003120f0a0b5345435245545f544558541004120e0a0a47" .
            "524f55505f54455854100512150a1147524f55505f5345435245545f5445" .
            "5854100612090a05494d414745100712100a0c5345435245545f494d4147" .
            "451008120f0a0b47524f55505f494d414745100912160a1247524f55505f" .
            "5345435245545f494d414745100a12090a05564f494345100b12100a0c53" .
            "45435245545f564f494345100c120f0a0b47524f55505f564f494345100d" .
            "12160a1247524f55505f5345435245545f564f494345100e12070a034d41" .
            "50100f120e0a0a5345435245545f4d41501010120d0a0947524f55505f4d" .
            "4150101112140a1047524f55505f5345435245545f4d41501012120d0a09" .
            "55325f4e4f54494345101312100a0c47524f55505f4e4f54494345101442" .
            "330a15636f6d2e616b6178696e2e70726f746f2e636f72654209436f7265" .
            "50726f746fca020e4c6962726172795c506c7567696e620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
