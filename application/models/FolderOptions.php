<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class FolderOptions extends CI_Model {
                        
public function FolderExist($foldername){
     
    $query = $this->db->get_where('sys_files',array('lower(media_folder_name)'=>strtolower($foldername)));
    
    $row = $query->row();

    if($row != null && !empty($row)){
        return $row->auto_generated_id;
    }

    return false;
}

public function CreateFolder($foldername){

    $folderExist = $this->FolderExist($foldername);

    if($folderExist!=false){
        return $folderExist;
    }

    if(!is_dir('uploads/media/'.$foldername)){
        if(mkdir('uploads/media/'.$foldername,0777,TRUE)){
            mkdir('uploads/media/'.$foldername.'/videos',0777,TRUE);
            mkdir('uploads/media/'.$foldername.'/photos',0777,TRUE);

            $folder_properties = array(
                'media_folder_name' => $foldername,
                'sys_user' => $this->ses->userdata('user_ses')
            );
        
            $success = $this->gen->InsertFolder($folder_properties);
    
            if($success){
                return $this->FolderExist($foldername);
            }
    
            return false;
        }
    }

    return false;

    
}


public function GetFolderContents($foldername){



}


public function GetFolderNames(){



}


public function RenameFolders($data){



}



public function DeleteFolder($foldername){

    $result = $this->fp->FolderExist($foldername);

    if($result == false){
        return false;
    }



    $mainDelete = $this->db->delete('sys_files', array('auto_generated_id' => $result));

    if($mainDelete){

        $foriegnKeyDelete = $this->db->delete('sys_files', array('sys_folder_id' => $result));

        if($foriegnKeyDelete){

            if(rmdir("uploads/media/{$foldername}")){
                return  true;
            }
        }

    }

    return false;

    

}




                        
                            
                        
}
                        
/* End of file FileProcesses.php */
    
                        