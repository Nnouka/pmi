@include('partials.about.section', [
    'title' => 'OUR ACHIEVEMENTS SO FAR', 
    'content' => [
        'PMI INTERNATIONAL have been instrumental in the planting of Churches Of Christ across the length and breadth of the African continent. In the same rich vein, we have successfully trained and retrained about five hundred able Ministers of the Gospel of Christ . More so, more than two hundred Congregations of Church Of Christ in Africa , Asia and other parts of the world have been strengthened by PMI International.',
    ],
    'pictures' => [
        ['src' => 'images/mission/evangelism-phillipines.jpg', 'caption' => 'Our training is stress free and comes handy on your Android mobile device, with seasoned Gospel Ministers succinctly delivering their lectures and results on record time.']
    ],
    'closing' => 'Join us to learn more about the inerrant Word of God, and add more Spiritual value to your Christian life.',
    'cta' => [
        'text' => 'Welcome on board!',
        'onclick' => 'toggleEnrollModal()'
    ]
]
)
