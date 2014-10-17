<?php 

/**
 * Handles Asset Manual Uploads
 * 
 * @author Steve Bauman <sbauman@bwbc.gc.ca>
 */

namespace Stevebauman\Maintenance\Services;

use Dmyers\Storage\Storage;
use Illuminate\Support\Facades\Config;
use Stevebauman\Maintenance\Services\SentryService;
use Stevebauman\Maintenance\Services\AssetService;
use Stevebauman\Maintenance\Services\AttachmentService;
use Stevebauman\Maintenance\Services\AbstractModelService;

class AssetManualService extends AbstractModelService {
	
	public function __construct(AssetService $asset, AttachmentService $attachment, SentryService $sentry){
		$this->asset = $asset;
		$this->attachment = $attachment;
                $this->sentry = $sentry;
	}
	
        /**
         * Creates attachment records, attaches them to the asset images pivot table,
         * and moves the uploaded file into it's stationary position (out of the temp folder)
         * 
         * @return boolean OR object
         */
        public function create(){
            
            /*
             * Find the asset
             */
            $asset = $this->asset->find($this->getInput('asset_id'));
            
            /*
             * Check if any files have been uploaded
             */
            if($files = $this->getInput('files')){
                
                /*
                 * For each file, create the attachment record, and sync asset image pivot table
                 */
                foreach($files as $file){
                    
                    $attributes = explode('|', $file);

                    $fileName = $attributes[0];
                    $fileOriginalName = $attributes[1];

                    /*
                     * Ex. files/assets/images/1/example.png
                     */
                    $movedFilePath = Config::get('maintenance::site.paths.assets.manuals').sprintf('%s/', $asset->id);

                    /*
                     * Move the file
                     */
                    Storage::move(Config::get('maintenance::site.paths.temp').$fileName, $movedFilePath.$fileName);

                    /*
                     * Set insert data
                     */
                    $insert = array(
                        'name' => $fileOriginalName,
                        'file_name' => $fileName,
                        'file_path' => $movedFilePath,
                        'user_id' => $this->sentry->getCurrentUserId()
                    );
                    
                    /*
                     * Create the attachment record
                     */
                    if($record = $this->attachment->setInput($insert)->create()){
                        
                        /*
                         * Attach the attachment record to the asset images
                         */
                        $asset->manuals()->attach($record);
                    }
                }
                
                /*
                 *  Return attachment record on success
                 */
                return $record;
                
            } else{
                /*
                 * No Files were detected to be uploaded, return false
                 */
                return false;
            }
            
        }
            
}