<?php

    namespace ecommerce\model;


    class Category
    {

        /**
         * @var int id.
         */
        private $iId;
        /**
         * @var string name.
         */
        private $sName;
        /**
         * @var string description.
         */
        private $sDescription;
        /**
         * @var string image path.
         */
        private $sImage;

        /**
         * @param int $iId
         */
        public function setId($iId)
        {
            $this->iId = $iId;
        }

        /**
         * @return int
         */
        public function getId()
        {
            return $this->iId;
        }

        /**
         * @param string $sDescription
         */
        public function setDescription($sDescription)
        {
            $this->sDescription = $sDescription;
        }

        /**
         * @return string
         */
        public function getDescription()
        {
            return $this->sDescription;
        }

        /**
         * @param string $sImage
         */
        public function setImage($sImage)
        {
            $this->sImage = $sImage;
        }

        /**
         * @return string
         */
        public function getImage()
        {
            return $this->sImage;
        }

        /**
         * @param string $sName
         */
        public function setName($sName)
        {
            $this->sName = $sName;
        }

        /**
         * @return string
         */
        public function getName()
        {
            return $this->sName;
        }


        public function getUrl()
        {
            return 'index.php?page=category&id=' . $this->getId();
        }
    }
