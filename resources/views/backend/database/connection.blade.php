<!-- Database  Start -->
@php
    class DatabaseConnection
    {
        // For Footer Logo
        public function FooterLogo()
        {
            $logo = DB::table('logos')
                ->select(['image'])
                ->where('status', 2)
                ->get();
            return $logo;
        }
        // For Header Logo
        public function HeaderLogo()
        {
            $logo = DB::table('logos')
                ->select(['image'])
                ->where('status', 1)
                ->get();
            return $logo;
        }
    
        // For MiniLogo
        public function miniLogoConnection()
        {
            $miniLogo = DB::table('slider_details')
                ->select('title')
                ->get();
            if (isset($miniLogo[0])) {
                $miniLogo = str_split($miniLogo[0]->title, 1)[0];
                return $miniLogo;
            } else {
                return 'R';
            }
        }
    
        // For Title
        public function websiteTitle()
        {
            $miniLogo = DB::table('slider_details')
                ->select('title')
                ->get();
            return $miniLogo;
        }
    
        //  For Count Unread
        public function unreadMessage()
        {
            $unread = DB::table('messages')
                ->where('read_at', 0)
                ->count();
            return $unread;
        }
    
        //  For Notice Messages
        public function noticeReadMessage()
        {
            $messages = DB::table('messages')
                ->limit(3)
                ->join('users', 'messages.authId', '=', 'users.id')
                ->select('messages.*', 'users.name as userName', 'users.image as profileImage')
                ->orderBy('messages.id', 'DESC')
                ->get();
            return $messages;
        }
    }
@endphp
<!-- Database   End -->
